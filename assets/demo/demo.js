// =============================================================================
// REQUEST DEMO · Three.js horn-cluster + E-field + form state + D3 plots
// Brand: gold #fab800 / black #0d0900 / white
// =============================================================================

import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

const GOLD  = 0xfab800;
const BLACK = 0x0d0900;

// =============================================================================
// 1. 3D SCENE — procedural 7-horn cluster
// =============================================================================

class HornCluster {
  constructor(container) {
    this.container = container;
    this.exploded = false;
    this.fieldOn = true;

    this.scene = new THREE.Scene();

    this.camera = new THREE.PerspectiveCamera(45, 1, 0.1, 100);
    this.camera.position.set(4.5, 2.5, 5.5);

    this.renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    this.renderer.outputColorSpace = THREE.SRGBColorSpace;
    container.appendChild(this.renderer.domElement);

    this.controls = new OrbitControls(this.camera, this.renderer.domElement);
    this.controls.enableDamping = true;
    this.controls.dampingFactor = 0.08;
    this.controls.enablePan = false;
    this.controls.minDistance = 3.5;
    this.controls.maxDistance = 12;
    this.controls.autoRotate = true;
    this.controls.autoRotateSpeed = 0.6;

    this.buildLighting();
    this.buildAssembly();
    this.buildField();

    this.resize();
    window.addEventListener('resize', () => this.resize());

    // Pause auto-rotate when user interacts
    this.controls.addEventListener('start', () => { this.controls.autoRotate = false; });

    this.clock = new THREE.Clock();
    this.animate();
  }

  buildLighting() {
    const ambient = new THREE.AmbientLight(0xffffff, 0.55);
    this.scene.add(ambient);

    const key = new THREE.DirectionalLight(0xffd680, 1.4);
    key.position.set(5, 6, 4);
    this.scene.add(key);

    const rim = new THREE.DirectionalLight(0xffffff, 0.6);
    rim.position.set(-6, 3, -4);
    this.scene.add(rim);

    const fill = new THREE.PointLight(GOLD, 0.8, 14);
    fill.position.set(0, -2, 3);
    this.scene.add(fill);
  }

  buildAssembly() {
    this.assembly = new THREE.Group();
    this.horns = [];   // [{group, restPos, explodeDir}]

    // Gold metallic material for horn flares & body
    this.matBody = new THREE.MeshStandardMaterial({
      color: 0xb88a30,
      metalness: 0.85,
      roughness: 0.22,
    });
    this.matAccent = new THREE.MeshStandardMaterial({
      color: 0xfab800,
      metalness: 0.9,
      roughness: 0.18,
      emissive: 0x331f00,
      emissiveIntensity: 0.4,
    });
    this.matBase = new THREE.MeshStandardMaterial({
      color: 0x2a1f10,
      metalness: 0.65,
      roughness: 0.45,
    });

    // Backplate
    const baseGeo = new THREE.CylinderGeometry(1.6, 1.7, 0.35, 48);
    const base = new THREE.Mesh(baseGeo, this.matBase);
    base.position.y = -0.6;
    this.assembly.add(base);

    // Central horn + 6 surrounding horns in hex pattern
    const positions = [
      [0, 0],
      ...Array.from({ length: 6 }, (_, i) => {
        const a = (i / 6) * Math.PI * 2;
        return [Math.cos(a) * 0.95, Math.sin(a) * 0.95];
      }),
    ];

    positions.forEach(([x, z], idx) => {
      const horn = this.buildHorn(idx === 0);
      horn.position.set(x, 0, z);

      const restPos = horn.position.clone();
      const dir = idx === 0 ? new THREE.Vector3(0, 1, 0)
                            : new THREE.Vector3(x, 0.4, z).normalize();
      this.horns.push({ group: horn, restPos, explodeDir: dir });
      this.assembly.add(horn);
    });

    // Waveguide rectangular trunks beneath the cluster
    const trunkGeo = new THREE.BoxGeometry(0.32, 0.18, 0.32);
    positions.forEach(([x, z]) => {
      const t = new THREE.Mesh(trunkGeo, this.matBody);
      t.position.set(x, -0.4, z);
      this.assembly.add(t);
    });

    this.scene.add(this.assembly);
  }

  buildHorn(isCentral) {
    const group = new THREE.Group();

    // Flared horn: cone going up
    const flareGeo = new THREE.CylinderGeometry(0.55, 0.18, 0.95, 32, 1, true);
    const flare = new THREE.Mesh(flareGeo, isCentral ? this.matAccent : this.matBody);
    flare.position.y = 0.15;
    group.add(flare);

    // Flare rim
    const rimGeo = new THREE.TorusGeometry(0.55, 0.025, 12, 48);
    const rim = new THREE.Mesh(rimGeo, this.matAccent);
    rim.rotation.x = Math.PI / 2;
    rim.position.y = 0.625;
    group.add(rim);

    // Waveguide collar
    const collarGeo = new THREE.CylinderGeometry(0.2, 0.2, 0.2, 24);
    const collar = new THREE.Mesh(collarGeo, this.matBody);
    collar.position.y = -0.45;
    group.add(collar);

    return group;
  }

  buildField() {
    // E-field — gold particles flowing UP through the central horn
    const count = 600;
    const positions = new Float32Array(count * 3);
    const speeds = new Float32Array(count);
    const radii = new Float32Array(count);
    const angles = new Float32Array(count);

    for (let i = 0; i < count; i++) {
      const r = Math.random() * 0.5;
      const a = Math.random() * Math.PI * 2;
      positions[i * 3]     = Math.cos(a) * r;
      positions[i * 3 + 1] = Math.random() * 2 - 0.7;
      positions[i * 3 + 2] = Math.sin(a) * r;
      speeds[i] = 0.4 + Math.random() * 0.8;
      radii[i] = r;
      angles[i] = a;
    }

    const geo = new THREE.BufferGeometry();
    geo.setAttribute('position', new THREE.BufferAttribute(positions, 3));

    const mat = new THREE.PointsMaterial({
      color: GOLD,
      size: 0.05,
      transparent: true,
      opacity: 0.85,
      blending: THREE.AdditiveBlending,
      depthWrite: false,
    });

    this.field = new THREE.Points(geo, mat);
    this.fieldData = { count, speeds, radii, angles };
    this.scene.add(this.field);
  }

  updateField(dt, t) {
    if (!this.field) return;
    const pos = this.field.geometry.attributes.position;
    const { count, speeds, radii, angles } = this.fieldData;

    for (let i = 0; i < count; i++) {
      let y = pos.array[i * 3 + 1];
      y += speeds[i] * dt;
      if (y > 1.3) y = -0.7;

      // Swirl as it ascends
      const a = angles[i] + t * 0.4 + y * 0.3;
      const r = radii[i] * (1 + (y + 0.7) * 0.15);

      pos.array[i * 3]     = Math.cos(a) * r;
      pos.array[i * 3 + 1] = y;
      pos.array[i * 3 + 2] = Math.sin(a) * r;
    }
    pos.needsUpdate = true;
    this.field.material.opacity = this.fieldOn ? 0.85 : 0;
  }

  explode(state) {
    this.exploded = state;
    const target = state ? 0.85 : 0;
    this.horns.forEach(({ group, restPos, explodeDir }) => {
      const tx = restPos.x + explodeDir.x * target;
      const ty = restPos.y + explodeDir.y * target;
      const tz = restPos.z + explodeDir.z * target;
      this._tween(group.position, { x: tx, y: ty, z: tz }, 600);
    });
  }

  toggleField(state) { this.fieldOn = state; }

  reset() {
    this.controls.reset();
    this.controls.autoRotate = true;
    if (this.exploded) this.explode(false);
  }

  _tween(obj, target, duration) {
    const start = { x: obj.x, y: obj.y, z: obj.z };
    const t0 = performance.now();
    const tick = () => {
      const t = Math.min(1, (performance.now() - t0) / duration);
      const e = 1 - Math.pow(1 - t, 3); // easeOutCubic
      obj.x = start.x + (target.x - start.x) * e;
      obj.y = start.y + (target.y - start.y) * e;
      obj.z = start.z + (target.z - start.z) * e;
      if (t < 1) requestAnimationFrame(tick);
    };
    tick();
  }

  resize() {
    const w = this.container.clientWidth;
    const h = this.container.clientHeight;
    this.renderer.setSize(w, h, false);
    this.camera.aspect = w / h;
    this.camera.updateProjectionMatrix();
  }

  animate() {
    const dt = this.clock.getDelta();
    const t = this.clock.getElapsedTime();
    this.updateField(dt, t);
    this.controls.update();
    this.renderer.render(this.scene, this.camera);
    requestAnimationFrame(() => this.animate());
  }
}

// =============================================================================
// 2. SPECTRUM EXPLORER
// =============================================================================

const FREQ_BANDS = [
  { max: 3,   band: 'HF · VHF',       app: 'Broadcasting · Marine radio',     process: '— (out of range)',
    note: 'Skin depth ≈ 1.2 µm — far larger than typical surface roughness. Conductor loss is negligible compared to dielectric and free-space loss.' },
  { max: 8,   band: 'SHF · C-band',   app: 'Satellite comms · Wi-Fi',         process: '3D Casting (aluminum)',
    note: 'Skin depth ≈ 0.8 µm. PCB still viable, but waveguide topology starts to outperform planar lines on Q-factor.' },
  { max: 18,  band: 'SHF · Ku-band',  app: 'Satellite TV · Weather radar',    process: '3D Casting (aluminum)',
    note: 'Skin depth ≈ 0.5 µm. Surface roughness > 1 µm visibly degrades insertion loss — Hammerstad–Jensen correction applies.' },
  { max: 27,  band: 'SHF · K-band',   app: 'Police radar · Backhaul',         process: '3D Casting (aluminum)',
    note: 'Skin depth ≈ 0.4 µm. Cast-aluminum with silver plating delivers near-theoretical conductor loss across the band.' },
  { max: 40,  band: 'EHF · Ka-band',  app: 'INCUS Earth science · 5G mmWave', process: '3D Casting (aluminum)',
    note: 'Skin depth ≈ 0.38 µm. Hammerstad–Jensen predicts >30% loss penalty for Ra > 1 µm — casting beats milling here on surface finish.' },
  { max: 75,  band: 'EHF · V-band',   app: 'Drones · 60 GHz Wi-Fi',           process: '3D Printing (polymer + metallization)',
    note: 'Skin depth ≈ 0.3 µm. PCB dielectric loss explodes — monolithic waveguide is the only practical topology.' },
  { max: 110, band: 'EHF · W-band',   app: 'Automotive radar · Security',     process: '3D Casting (aluminum)',
    note: 'Skin depth ≈ 0.25 µm. WR-10 dimensional tolerance must stay below 25 µm — split-block assemblies suffer from flange leakage.' },
  { max: 170, band: 'Sub-THz · D-band', app: '6G backhaul · imaging',         process: '3D Printing (polymer + metallization)',
    note: 'Skin depth ≈ 0.2 µm. Monolithic construction eliminates the flange leakage that dominates split-block link budgets above 100 GHz.' },
  { max: 300, band: 'Sub-THz',        app: '6G research · spectroscopy',      process: '3D Printing (polymer + metallization)',
    note: 'Skin depth ≈ 0.15 µm. Surface roughness is the single largest contributor to attenuation — post-print polishing is mandatory.' },
];

function bandFor(freq) {
  return FREQ_BANDS.find(b => freq <= b.max) || FREQ_BANDS[FREQ_BANDS.length - 1];
}

function setupSpectrum() {
  const range  = document.getElementById('demo-spectrum');
  const bubble = document.getElementById('demo-spectrum-bubble');
  const band   = document.getElementById('dsr-band');
  const app    = document.getElementById('dsr-app');
  const wl     = document.getElementById('dsr-wl');
  const proc   = document.getElementById('dsr-process');
  const note   = document.getElementById('dsr-note');

  function update() {
    const f = parseFloat(range.value);
    const b = bandFor(f);
    const pct = ((f - range.min) / (range.max - range.min)) * 100;

    bubble.style.left = `${pct}%`;
    bubble.textContent = `${f.toFixed(1)} GHz`;

    pulse(band, b.band);
    pulse(app, b.app);
    pulse(wl, `${(300 / f).toFixed(2)} mm`);
    pulse(proc, b.process);
    if (note && b.note) pulse(note, b.note);
  }

  function pulse(el, text) {
    if (el.textContent === text) return;
    el.textContent = text;
    el.classList.remove('is-pulse');
    void el.offsetWidth;
    el.classList.add('is-pulse');
    setTimeout(() => el.classList.remove('is-pulse'), 400);
  }

  range.addEventListener('input', update);
  update();
}

// =============================================================================
// 3. CONFIGURATOR — 3-step form + live Spec Card
// =============================================================================

function setupConfigurator() {
  const form = document.getElementById('demo-form');
  if (!form) return;

  const state = {
    step: 1,
    application: null,
    applicationProcess: null,
    frequency: 77,
    loss: '< 0.25 dB',
    mass: 'Light (100 — 300 g)',
    quantity: '1 — 5 (prototype)',
    deadline: '6 — 8 weeks',
    name: '', company: '', email: '', role: '', notes: '',
  };

  // Brief ID
  const briefId = 'GD-DEMO-' + Math.random().toString(36).slice(2, 6).toUpperCase();
  document.getElementById('dsc-id').textContent = briefId;
  document.getElementById('demo-confirmation-id').textContent = briefId;

  // === Step navigation ===
  const steps = form.querySelectorAll('.demo-step');
  const pills = form.querySelectorAll('.demo-step-pill');
  const lines = form.querySelectorAll('.demo-step-line');
  const prevBtn = document.getElementById('demo-prev');
  const nextBtn = document.getElementById('demo-next');
  const submitBtn = document.getElementById('demo-submit');

  function goTo(n) {
    state.step = n;
    steps.forEach(s => s.classList.toggle('is-active', +s.dataset.step === n));
    pills.forEach(p => {
      const ps = +p.dataset.step;
      p.classList.toggle('is-active', ps === n);
      p.classList.toggle('is-complete', ps < n);
    });
    lines.forEach((l, i) => l.classList.toggle('is-filled', i < n - 1));

    prevBtn.disabled = n === 1;
    nextBtn.hidden = n === 3;
    submitBtn.hidden = n !== 3;
  }

  prevBtn.addEventListener('click', () => state.step > 1 && goTo(state.step - 1));
  nextBtn.addEventListener('click', () => {
    if (state.step === 1 && !state.application) {
      flashError('Please pick an application to continue.');
      return;
    }
    if (state.step < 3) goTo(state.step + 1);
  });
  pills.forEach(p => p.addEventListener('click', () => goTo(+p.dataset.step)));

  // === Step 1: Application cards ===
  const freqInput  = document.getElementById('demo-freq');
  const freqOut    = document.getElementById('demo-freq-out');
  const lossSel    = document.getElementById('demo-loss');
  const massSel    = document.getElementById('demo-mass');
  const qtySel     = document.getElementById('demo-quantity');
  const deadSel    = document.getElementById('demo-deadline');
  const nameI      = document.getElementById('demo-name');
  const companyI   = document.getElementById('demo-company');
  const emailI     = document.getElementById('demo-email');
  const roleI      = document.getElementById('demo-role');
  const notesI     = document.getElementById('demo-notes');

  form.querySelectorAll('input[name="application"]').forEach(radio => {
    radio.addEventListener('change', () => {
      state.application = radio.value;
      const suggestedFreq = parseFloat(radio.dataset.freq);
      const process = radio.dataset.process;
      state.applicationProcess = process;

      // Auto-suggest frequency
      freqInput.value = suggestedFreq;
      state.frequency = suggestedFreq;
      freqOut.textContent = `${suggestedFreq.toFixed(1)} GHz`;
      updateSpec();
    });
  });

  // === Step 2: Frequency slider + selects ===
  freqInput.addEventListener('input', () => {
    state.frequency = parseFloat(freqInput.value);
    freqOut.textContent = `${state.frequency.toFixed(1)} GHz`;
    updateSpec();
  });

  [
    [lossSel, 'loss'], [massSel, 'mass'],
    [qtySel, 'quantity'], [deadSel, 'deadline'],
  ].forEach(([el, key]) => el.addEventListener('change', () => {
    state[key] = el.value;
    updateSpec();
  }));

  // === Step 3: Contact ===
  [nameI, companyI, emailI, roleI, notesI].forEach(el => {
    const key = el.id.replace('demo-', '');
    el.addEventListener('input', () => {
      state[key] = el.value.trim();
      updateSpec();
    });
  });

  // === Spec Card — live updates ===
  const dsc = {
    app:     document.getElementById('dsc-app'),
    freq:    document.getElementById('dsc-freq'),
    loss:    document.getElementById('dsc-loss'),
    mass:    document.getElementById('dsc-mass'),
    qty:     document.getElementById('dsc-qty'),
    lead:    document.getElementById('dsc-lead'),
    process: document.getElementById('dsc-process'),
    contact: document.getElementById('dsc-contact'),
  };
  const progressBar  = document.getElementById('dsc-progress-bar');
  const progressLbl  = document.getElementById('dsc-progress-label');

  function leadTimeFor() {
    if (state.deadline === 'ASAP (< 4 weeks)') return '~3 weeks (rush)';
    if (state.deadline === '6 — 8 weeks')     return '~6 weeks';
    if (state.deadline === '3 — 6 months')    return '~4 months';
    return '~8 weeks (typical)';
  }

  function recommendedProcess() {
    if (state.applicationProcess) return state.applicationProcess;
    return state.frequency > 100
      ? '3D Printing (polymer + metallization)'
      : '3D Casting (aluminum)';
  }

  function progressPct() {
    let filled = 0;
    if (state.application) filled++;
    if (state.frequency)   filled++;
    filled += [state.loss, state.mass, state.quantity, state.deadline].filter(Boolean).length / 4;
    if (state.name && state.email && state.company) filled++;
    return Math.min(100, Math.round((filled / 4) * 100));
  }

  function setDsc(el, value) {
    if (el.textContent === value) return;
    el.textContent = value;
    el.classList.remove('is-flash');
    void el.offsetWidth;
    el.classList.add('is-flash');
  }

  function updateSpec() {
    setDsc(dsc.app,     state.application || '—');
    setDsc(dsc.freq,    `${state.frequency.toFixed(1)} GHz`);
    setDsc(dsc.loss,    state.loss);
    setDsc(dsc.mass,    state.mass);
    setDsc(dsc.qty,     state.quantity);
    setDsc(dsc.lead,    leadTimeFor());
    setDsc(dsc.process, recommendedProcess());

    const contact = [state.name, state.company].filter(Boolean).join(' · ') || '—';
    setDsc(dsc.contact, contact);

    const pct = progressPct();
    progressBar.style.setProperty('--p', pct + '%');
    progressLbl.textContent = `${pct}% complete`;
  }

  updateSpec();

  // === Inline error toast ===
  function flashError(msg) {
    let toast = document.getElementById('demo-error-toast');
    if (!toast) {
      toast = document.createElement('div');
      toast.id = 'demo-error-toast';
      Object.assign(toast.style, {
        position: 'fixed', bottom: '24px', left: '50%',
        transform: 'translateX(-50%)', padding: '12px 20px',
        background: '#0d0900', color: '#fab800', borderRadius: '10px',
        border: '1px solid #fab800', zIndex: 99,
        fontWeight: '600', fontSize: '0.9rem',
        boxShadow: '0 8px 24px rgba(0,0,0,0.3)',
        opacity: '0', transition: 'opacity 0.3s',
      });
      document.body.appendChild(toast);
    }
    toast.textContent = msg;
    toast.style.opacity = '1';
    clearTimeout(toast._t);
    toast._t = setTimeout(() => { toast.style.opacity = '0'; }, 2400);
  }

  // === Submit ===
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    if (!state.name || !state.email || !state.company) {
      flashError('Name, company and email are required.');
      return;
    }
    if (!document.getElementById('demo-consent').checked) {
      flashError('Please accept the privacy policy.');
      return;
    }
    triggerConfirmation(state, briefId);
  });
}

// =============================================================================
// 4. INTERACTIVE PLOTS (D3.js)
// =============================================================================

function waitForD3(cb) {
  if (window.d3) return cb(window.d3);
  const i = setInterval(() => {
    if (window.d3) { clearInterval(i); cb(window.d3); }
  }, 50);
}

function plotReturnLoss(d3) {
  const container = document.getElementById('plot-return-loss');
  if (!container) return;
  const togglesEl = document.getElementById('rl-toggles');

  // Synthesized 7-channel return loss data (35.0 — 36.5 GHz)
  const channels = [];
  for (let ch = 0; ch < 7; ch++) {
    const f0 = 35.5 + (ch - 3) * 0.05;
    const data = [];
    for (let f = 35.0; f <= 36.5; f += 0.02) {
      const dx = f - f0;
      const dip = -28 - 8 * Math.exp(-(dx * dx) / 0.08);
      const noise = (Math.random() - 0.5) * 1.2;
      data.push({ f, db: Math.min(-15, dip + noise) });
    }
    channels.push({ id: ch + 1, data, visible: true });
  }

  const W = container.clientWidth;
  const H = container.clientHeight;
  const m = { top: 14, right: 14, bottom: 32, left: 42 };

  const svg = d3.select(container).append('svg')
    .attr('viewBox', `0 0 ${W} ${H}`);

  const x = d3.scaleLinear().domain([35.0, 36.5]).range([m.left, W - m.right]);
  const y = d3.scaleLinear().domain([-45, -15]).range([H - m.bottom, m.top]);

  // Grid
  svg.append('g').attr('class', 'grid')
    .attr('transform', `translate(0,${H - m.bottom})`)
    .call(d3.axisBottom(x).tickSize(-(H - m.top - m.bottom)).tickFormat(''));
  svg.append('g').attr('class', 'grid')
    .attr('transform', `translate(${m.left},0)`)
    .call(d3.axisLeft(y).tickSize(-(W - m.left - m.right)).tickFormat(''));

  // Axes
  svg.append('g').attr('class', 'axis')
    .attr('transform', `translate(0,${H - m.bottom})`)
    .call(d3.axisBottom(x).ticks(6).tickFormat(d => `${d.toFixed(1)} GHz`));
  svg.append('g').attr('class', 'axis')
    .attr('transform', `translate(${m.left},0)`)
    .call(d3.axisLeft(y).ticks(5).tickFormat(d => `${d} dB`));

  const line = d3.line()
    .x(d => x(d.f))
    .y(d => y(d.db))
    .curve(d3.curveCatmullRom);

  // Color scale: gold gradient
  const colors = ['#fab800', '#e09c00', '#ffd84d', '#c88300', '#ffbe2e', '#a76d00', '#ffce5c'];

  const lines = svg.selectAll('.channel-line')
    .data(channels).enter().append('path')
    .attr('class', d => `channel ch-${d.id}`)
    .attr('d', d => line(d.data))
    .attr('stroke', (d, i) => colors[i])
    .attr('stroke-width', 2);

  // Toggle buttons
  channels.forEach((c, i) => {
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'dpt-btn is-active';
    btn.style.borderColor = colors[i];
    btn.textContent = `Ch ${c.id}`;
    btn.addEventListener('click', () => {
      c.visible = !c.visible;
      btn.classList.toggle('is-active', c.visible);
      svg.select(`.ch-${c.id}`).classed('channel-hidden', !c.visible);
    });
    togglesEl.appendChild(btn);
  });

  // Hover tooltip
  const tooltip = d3.select(container).append('div').attr('class', 'tooltip').style('opacity', 0);
  const hoverLine = svg.append('line').attr('class', 'hover-line')
    .attr('y1', m.top).attr('y2', H - m.bottom).style('opacity', 0);

  svg.append('rect')
    .attr('x', m.left).attr('y', m.top)
    .attr('width', W - m.left - m.right).attr('height', H - m.top - m.bottom)
    .attr('fill', 'transparent')
    .on('mousemove', function (event) {
      const [mx] = d3.pointer(event);
      const f = x.invert(mx);
      hoverLine.attr('x1', mx).attr('x2', mx).style('opacity', 1);

      // Find best channel value at this f
      const vals = channels.filter(c => c.visible).map(c => {
        const closest = c.data.reduce((p, n) => Math.abs(n.f - f) < Math.abs(p.f - f) ? n : p);
        return { ch: c.id, db: closest.db };
      });
      const best = vals.reduce((p, n) => n.db < p.db ? n : p, { ch: 0, db: 0 });

      tooltip
        .style('opacity', 1)
        .style('left', (mx) + 'px')
        .style('top', (y(best.db)) + 'px')
        .html(`<strong>Ch ${best.ch}</strong> · ${f.toFixed(2)} GHz · ${best.db.toFixed(1)} dB`);
    })
    .on('mouseleave', () => {
      tooltip.style('opacity', 0);
      hoverLine.style('opacity', 0);
    });
}

function plotBeam(d3) {
  const container = document.getElementById('plot-beam');
  if (!container) return;

  // Synthesized beam pattern: simulated vs measured (−40° to +40°)
  const data = [];
  for (let a = -40; a <= 40; a += 0.5) {
    const main = 14.3 * Math.exp(-(a * a) / 80);   // main lobe
    const side = -3 * Math.exp(-((Math.abs(a) - 20) ** 2) / 6);
    const sim = main + side;
    const meas = sim + (Math.random() - 0.5) * 0.4;
    data.push({ a, sim, meas });
  }

  const W = container.clientWidth;
  const H = container.clientHeight;
  const m = { top: 14, right: 14, bottom: 32, left: 42 };

  const svg = d3.select(container).append('svg').attr('viewBox', `0 0 ${W} ${H}`);

  const x = d3.scaleLinear().domain([-40, 40]).range([m.left, W - m.right]);
  const y = d3.scaleLinear().domain([-25, 16]).range([H - m.bottom, m.top]);

  svg.append('g').attr('class', 'grid')
    .attr('transform', `translate(0,${H - m.bottom})`)
    .call(d3.axisBottom(x).tickSize(-(H - m.top - m.bottom)).tickFormat(''));
  svg.append('g').attr('class', 'grid')
    .attr('transform', `translate(${m.left},0)`)
    .call(d3.axisLeft(y).tickSize(-(W - m.left - m.right)).tickFormat(''));

  svg.append('g').attr('class', 'axis')
    .attr('transform', `translate(0,${H - m.bottom})`)
    .call(d3.axisBottom(x).ticks(7).tickFormat(d => `${d}°`));
  svg.append('g').attr('class', 'axis')
    .attr('transform', `translate(${m.left},0)`)
    .call(d3.axisLeft(y).ticks(5).tickFormat(d => `${d} dBi`));

  const lineSim = d3.line().x(d => x(d.a)).y(d => y(d.sim)).curve(d3.curveCatmullRom);
  const lineMeas = d3.line().x(d => x(d.a)).y(d => y(d.meas)).curve(d3.curveCatmullRom);

  svg.append('path').datum(data)
    .attr('class', 'channel')
    .attr('d', lineSim)
    .attr('stroke', '#fab800')
    .attr('stroke-width', 2.5)
    .attr('stroke-dasharray', '0');

  svg.append('path').datum(data)
    .attr('class', 'channel')
    .attr('d', lineMeas)
    .attr('stroke', '#0d0900')
    .attr('stroke-width', 1.8)
    .attr('stroke-dasharray', '4 3');

  // Legend
  const legend = svg.append('g').attr('transform', `translate(${W - m.right - 130},${m.top + 4})`);
  legend.append('line').attr('x1', 0).attr('x2', 18).attr('y1', 6).attr('y2', 6).attr('stroke', '#fab800').attr('stroke-width', 2.5);
  legend.append('text').attr('x', 24).attr('y', 9).attr('font-size', 11).attr('fill', '#0d0900').text('Simulated');
  legend.append('line').attr('x1', 0).attr('x2', 18).attr('y1', 22).attr('y2', 22).attr('stroke', '#0d0900').attr('stroke-width', 1.8).attr('stroke-dasharray', '4 3');
  legend.append('text').attr('x', 24).attr('y', 25).attr('font-size', 11).attr('fill', '#0d0900').text('Measured');

  // Tooltip
  const tooltip = d3.select(container).append('div').attr('class', 'tooltip').style('opacity', 0);
  const hoverLine = svg.append('line').attr('class', 'hover-line')
    .attr('y1', m.top).attr('y2', H - m.bottom).style('opacity', 0);

  svg.append('rect')
    .attr('x', m.left).attr('y', m.top)
    .attr('width', W - m.left - m.right).attr('height', H - m.top - m.bottom)
    .attr('fill', 'transparent')
    .on('mousemove', function (event) {
      const [mx] = d3.pointer(event);
      const a = x.invert(mx);
      const closest = data.reduce((p, n) => Math.abs(n.a - a) < Math.abs(p.a - a) ? n : p);
      hoverLine.attr('x1', mx).attr('x2', mx).style('opacity', 1);
      tooltip
        .style('opacity', 1)
        .style('left', mx + 'px')
        .style('top', y(closest.meas) + 'px')
        .html(`${a.toFixed(1)}° · sim ${closest.sim.toFixed(1)} / meas ${closest.meas.toFixed(1)} dBi`);
    })
    .on('mouseleave', () => {
      tooltip.style('opacity', 0);
      hoverLine.style('opacity', 0);
    });
}

// =============================================================================
// 5. CONFIRMATION ANIMATION
// =============================================================================

function triggerConfirmation(state, briefId) {
  const overlay = document.getElementById('demo-confirmation');
  overlay.classList.add('is-active');
  overlay.setAttribute('aria-hidden', 'false');

  // Waveform animation
  const cvs = document.getElementById('demo-confirmation-wave');
  const ctx = cvs.getContext('2d');
  const dpr = Math.min(window.devicePixelRatio, 2);
  function sizeCanvas() {
    cvs.width = cvs.offsetWidth * dpr;
    cvs.height = cvs.offsetHeight * dpr;
    ctx.scale(dpr, dpr);
  }
  sizeCanvas();

  const t0 = performance.now();
  let raf;
  function drawWave() {
    const w = cvs.offsetWidth;
    const h = cvs.offsetHeight;
    const t = (performance.now() - t0) / 1000;
    ctx.clearRect(0, 0, w, h);

    for (let i = 0; i < 4; i++) {
      ctx.beginPath();
      const amp = 18 - i * 3;
      const freq = 0.018 + i * 0.004;
      const phase = t * 1.4 + i * 0.6;
      ctx.strokeStyle = `rgba(250,184,0,${0.55 - i * 0.13})`;
      ctx.lineWidth = 1.6 - i * 0.2;
      for (let x = 0; x <= w; x += 2) {
        const y = h / 2 + Math.sin(x * freq + phase) * amp;
        if (x === 0) ctx.moveTo(x, y);
        else ctx.lineTo(x, y);
      }
      ctx.stroke();
    }
    raf = requestAnimationFrame(drawWave);
  }
  drawWave();

  // Copy-to-clipboard
  document.getElementById('demo-copy-brief').onclick = () => {
    const txt = [
      `GOLDEN DEVICES — PROJECT BRIEF`,
      `ID: ${briefId}`,
      `─────────────────────────────`,
      `Application:        ${state.application || '—'}`,
      `Frequency:          ${state.frequency.toFixed(1)} GHz`,
      `Insertion loss:     ${state.loss}`,
      `Mass:               ${state.mass}`,
      `Quantity:           ${state.quantity}`,
      `Deadline:           ${state.deadline}`,
      `Recommended:        ${state.applicationProcess || (state.frequency > 100 ? '3D Printing' : '3D Casting')}`,
      ``,
      `Contact:            ${state.name} · ${state.role || ''}`,
      `Company:            ${state.company}`,
      `Email:              ${state.email}`,
      state.notes ? `\nNotes:\n${state.notes}` : '',
    ].filter(Boolean).join('\n');

    navigator.clipboard.writeText(txt).then(() => {
      const btn = document.getElementById('demo-copy-brief');
      const original = btn.textContent;
      btn.textContent = '✓ Copied!';
      setTimeout(() => { btn.textContent = original; }, 1800);
    });
  };
}

// =============================================================================
// BOOT
// =============================================================================

(function boot() {
  // 3D scene
  const stage = document.getElementById('demo-3d-canvas');
  if (stage) {
    const cluster = new HornCluster(stage);

    // Controls
    document.querySelectorAll('.demo-3d-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const action = btn.dataset.action;
        if (action === 'reset')   cluster.reset();
        if (action === 'explode') {
          const next = !cluster.exploded;
          cluster.explode(next);
          btn.setAttribute('aria-pressed', String(next));
        }
        if (action === 'field') {
          const next = !cluster.fieldOn;
          cluster.toggleField(next);
          btn.setAttribute('aria-pressed', String(next));
        }
        if (action === 'ar') {
          alert('AR view: replace the procedural model with a .glb file and use <model-viewer> to enable native AR on supported devices.');
        }
      });
    });
  }

  // Spectrum
  setupSpectrum();

  // Configurator
  setupConfigurator();

  // Plots — wait for d3 (loaded with defer)
  waitForD3((d3) => {
    plotReturnLoss(d3);
    plotBeam(d3);
  });
})();
