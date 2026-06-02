<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Het Onbeschreven Pad Academie</title>
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Lora:ital,wght@0,400;0,500;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
:root {
  --bruin: #5C2E0E;
  --bruin-mid: #9B5E3D;
  --caramel: #C07A46;
  --beige: #F5ECD8;
  --beige-dark: #EDD5B3;
  --crème: #FAF6EE;
  --wit: #FFFFFF;
  --tekst: #3A1F0A;
  --pastel-roze: #F7C5CC;
  --pastel-mint: #A8DCC5;
  --pastel-geel: #FAE5A0;
}
html { scroll-behavior: smooth; }
body { font-family: 'Lora', serif; background: var(--crème); color: var(--tekst); overflow-x: hidden; }

/* ── NAV ── */
nav {
  position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
  display: flex; align-items: center; justify-content: space-between;
  padding: 0 48px; height: 72px;
  background: rgba(250,246,238,0.96);
  backdrop-filter: blur(16px);
  border-bottom: 1px solid rgba(192,122,70,0.2);
}
.nav-logo { display: flex; align-items: center; gap: 12px; text-decoration: none; }
.nav-logo-tekst { font-family: 'Cinzel', serif; font-size: 12px; font-weight: 600; color: var(--bruin); letter-spacing: 2px; line-height: 1.3; }
.nav-logo-tekst span { display: block; font-size: 8px; font-weight: 400; color: var(--bruin-mid); letter-spacing: 4px; }
.nav-links { display: flex; align-items: center; gap: 36px; }
.nav-links a {
  font-family: 'Inter', sans-serif; font-size: 12px; font-weight: 400;
  color: var(--bruin-mid); text-decoration: none; letter-spacing: 1.5px;
  text-transform: uppercase; transition: color 0.2s; padding: 4px 0;
  border-bottom: 1px solid transparent;
}
.nav-links a:hover { color: var(--bruin); border-bottom-color: var(--caramel); }
.nav-rechts { display: flex; align-items: center; gap: 20px; }
.winkelmandje {
  position: relative; cursor: pointer;
  background: none; border: none; padding: 8px;
  color: var(--bruin); transition: color 0.2s;
}
.winkelmandje:hover { color: var(--caramel); }
.winkelmandje svg { width: 22px; height: 22px; }
.badge {
  position: absolute; top: 0; right: 0;
  background: var(--caramel); color: var(--wit);
  font-family: 'Inter', sans-serif; font-size: 9px; font-weight: 600;
  width: 16px; height: 16px; border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
}

/* ── HERO ── */
.hero {
  min-height: 100vh; padding-top: 72px;
  display: grid; grid-template-columns: 1fr 1fr;
  position: relative; overflow: hidden;
}
.hero-left {
  display: flex; flex-direction: column; justify-content: center;
  padding: 80px 60px 80px 80px; position: relative; z-index: 1;
}
.hero-badge {
  display: inline-flex; align-items: center; gap: 8px;
  background: var(--beige); border: 1px solid var(--beige-dark);
  border-radius: 50px; padding: 6px 16px; width: fit-content; margin-bottom: 28px;
  font-family: 'Inter', sans-serif; font-size: 10px; font-weight: 500;
  color: var(--caramel); letter-spacing: 2px; text-transform: uppercase;
  animation: fadeUp 0.8s ease both;
}
.hero-badge::before { content: ''; width: 6px; height: 6px; border-radius: 50%; background: var(--caramel); }
.hero-slogan {
  font-family: 'Lora', serif; font-size: 13px; font-style: italic;
  color: var(--caramel); margin-bottom: 16px; letter-spacing: 1px;
  animation: fadeUp 0.8s ease 0.05s both;
}
.hero-titel {
  font-family: 'Cinzel', serif; font-size: clamp(32px, 3.5vw, 54px);
  font-weight: 700; line-height: 1.15; color: var(--bruin);
  margin-bottom: 24px; animation: fadeUp 0.8s ease 0.1s both;
}
.hero-beschrijving {
  font-family: 'Lora', serif; font-size: 16px; line-height: 1.8;
  color: var(--bruin-mid); max-width: 480px; margin-bottom: 44px;
  animation: fadeUp 0.8s ease 0.2s both;
}
.hero-beschrijving em { font-style: italic; color: var(--caramel); }
.hero-knoppen { display: flex; gap: 16px; align-items: center; animation: fadeUp 0.8s ease 0.3s both; }
.knop-primair {
  background: var(--bruin); color: var(--beige);
  font-family: 'Cinzel', serif; font-size: 11px; font-weight: 600;
  letter-spacing: 2px; text-transform: uppercase;
  padding: 15px 32px; border: none; cursor: pointer;
  text-decoration: none; transition: background 0.25s, transform 0.2s; display: inline-block;
}
.knop-primair:hover { background: var(--caramel); transform: translateY(-2px); }
.knop-sec {
  font-family: 'Lora', serif; font-size: 14px; font-style: italic;
  color: var(--bruin-mid); text-decoration: none;
  border-bottom: 1px solid var(--caramel); padding-bottom: 2px; transition: color 0.2s;
}
.knop-sec:hover { color: var(--bruin); }
.hero-pijlers {
  display: flex; gap: 32px; margin-top: 52px; padding-top: 36px;
  border-top: 1px solid var(--beige-dark);
  animation: fadeUp 0.8s ease 0.4s both;
}
.pijler { text-align: left; }
.pijler-getal { font-family: 'Cinzel', serif; font-size: 24px; font-weight: 700; color: var(--bruin); display: block; }
.pijler-label { font-family: 'Inter', sans-serif; font-size: 10px; color: var(--bruin-mid); letter-spacing: 1.5px; text-transform: uppercase; }
.hero-right { background: var(--beige); position: relative; overflow: hidden; display: flex; align-items: center; justify-content: center; }
.hero-maan { width: 340px; height: 340px; animation: drijven 6s ease-in-out infinite; }
.hero-citaat {
  position: absolute; bottom: 48px; left: 0; right: 0; text-align: center;
  font-family: 'Lora', serif; font-size: 13px; font-style: italic;
  color: var(--bruin-mid); opacity: 0.7; padding: 0 40px;
}

/* ── BAND ── */
.band {
  background: var(--bruin); padding: 72px 80px; text-align: center;
  position: relative; overflow: hidden;
}
.band::before {
  content: ''; position: absolute; inset: 0;
  background: radial-gradient(ellipse 70% 60% at 50% 50%, rgba(192,122,70,0.15) 0%, transparent 70%);
}
.band-tekst {
  font-family: 'Lora', serif; font-size: clamp(20px, 2.2vw, 30px);
  line-height: 1.6; color: var(--beige); max-width: 750px; margin: 0 auto;
  position: relative;
}
.band-tekst em { color: var(--caramel); font-style: italic; }

/* ── SECTIES ALGEMEEN ── */
.sectie { padding: 100px 80px; }
.sectie-alt { background: var(--beige); }
.sectie-header { text-align: center; margin-bottom: 64px; }
.sectie-label {
  font-family: 'Inter', sans-serif; font-size: 10px; font-weight: 500;
  color: var(--caramel); letter-spacing: 4px; text-transform: uppercase;
  margin-bottom: 14px; display: block;
}
.sectie-titel {
  font-family: 'Cinzel', serif; font-size: clamp(24px, 2.8vw, 38px);
  font-weight: 700; color: var(--bruin); margin-bottom: 16px; line-height: 1.2;
}
.sectie-sub {
  font-family: 'Lora', serif; font-size: 16px; color: var(--bruin-mid);
  max-width: 560px; margin: 0 auto; line-height: 1.7;
}
.divider-lijn { border: none; border-top: 1px solid var(--beige-dark); margin: 0; }

/* ── OVER ONS ── */
.over-ons-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 80px;
  max-width: 1100px; margin: 0 auto;
}
.missie-blok h3 {
  font-family: 'Cinzel', serif; font-size: 14px; font-weight: 600;
  color: var(--caramel); letter-spacing: 3px; text-transform: uppercase;
  margin-bottom: 20px;
}
.missie-blok p {
  font-family: 'Lora', serif; font-size: 16px; line-height: 1.85;
  color: var(--tekst); margin-bottom: 16px;
}
.visie-lijst { list-style: none; margin-top: 20px; }
.visie-item {
  display: flex; gap: 14px; padding: 16px 0;
  border-bottom: 1px solid var(--beige-dark); align-items: flex-start;
}
.visie-item:last-child { border-bottom: none; }
.visie-dot {
  width: 8px; height: 8px; border-radius: 50%;
  background: var(--caramel); flex-shrink: 0; margin-top: 7px;
}
.visie-tekst { font-family: 'Lora', serif; font-size: 15px; line-height: 1.7; color: var(--tekst); }
.visie-tekst strong { color: var(--bruin); font-weight: 500; }

/* ── TEAM ── */
.team-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 40px;
  max-width: 800px; margin: 0 auto;
}
.team-kaart {
  background: var(--crème); padding: 40px;
  border: 1px solid var(--beige-dark); text-align: center;
  transition: transform 0.2s, box-shadow 0.2s;
}
.team-kaart:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(92,46,14,0.08); }
.team-avatar {
  width: 80px; height: 80px; border-radius: 50%;
  background: var(--beige); margin: 0 auto 20px;
  display: flex; align-items: center; justify-content: center;
  border: 2px solid var(--beige-dark);
}
.team-naam { font-family: 'Cinzel', serif; font-size: 15px; font-weight: 600; color: var(--bruin); margin-bottom: 6px; }
.team-rol { font-family: 'Lora', serif; font-size: 13px; font-style: italic; color: var(--caramel); margin-bottom: 14px; }
.team-bio { font-family: 'Lora', serif; font-size: 14px; line-height: 1.7; color: var(--bruin-mid); }

/* ── CONTACT ── */
.contact-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 60px;
  max-width: 900px; margin: 0 auto;
}
.contact-info h3 { font-family: 'Cinzel', serif; font-size: 18px; color: var(--bruin); margin-bottom: 24px; }
.contact-item { display: flex; gap: 14px; margin-bottom: 20px; align-items: flex-start; }
.contact-icon { width: 36px; height: 36px; background: var(--bruin); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
.contact-icon svg { width: 16px; height: 16px; color: var(--beige); }
.contact-tekst { font-family: 'Lora', serif; font-size: 15px; color: var(--tekst); line-height: 1.5; }
.contact-tekst small { display: block; font-family: 'Inter', sans-serif; font-size: 11px; color: var(--bruin-mid); letter-spacing: 1px; text-transform: uppercase; margin-bottom: 2px; }
.contact-form { display: flex; flex-direction: column; gap: 14px; }
.form-input {
  width: 100%; padding: 14px 16px;
  border: 1px solid var(--beige-dark); background: var(--crème);
  font-family: 'Lora', serif; font-size: 15px; color: var(--tekst);
  outline: none; transition: border-color 0.2s;
}
.form-input:focus { border-color: var(--caramel); }
.form-input::placeholder { color: var(--bruin-mid); opacity: 0.6; }
textarea.form-input { resize: vertical; min-height: 110px; }

/* ── E-LEARNING ── */
.elearning-hero {
  background: var(--bruin); padding: 80px;
  display: grid; grid-template-columns: 1fr 1fr; gap: 60px;
  align-items: center; max-width: 1200px; margin: 0 auto;
  position: relative; overflow: hidden;
}
.elearning-hero::before {
  content: ''; position: absolute; right: -100px; top: 50%;
  transform: translateY(-50%);
  width: 400px; height: 400px; border-radius: 50%;
  background: rgba(192,122,70,0.08); pointer-events: none;
}
.elearning-titel { font-family: 'Cinzel', serif; font-size: clamp(26px, 2.5vw, 38px); font-weight: 700; color: var(--beige); margin-bottom: 16px; line-height: 1.2; }
.elearning-sub { font-family: 'Lora', serif; font-size: 16px; color: rgba(245,236,216,0.75); line-height: 1.8; margin-bottom: 32px; }
.elearning-voordelen { list-style: none; margin-bottom: 36px; }
.elearning-voordelen li {
  display: flex; gap: 12px; align-items: flex-start;
  font-family: 'Lora', serif; font-size: 15px; color: var(--beige-dark);
  margin-bottom: 12px; line-height: 1.5;
}
.elearning-voordelen li::before {
  content: '✦'; color: var(--caramel); font-size: 10px; margin-top: 4px; flex-shrink: 0;
}
.elearning-stats {
  display: flex; gap: 36px; padding-top: 28px;
  border-top: 1px solid rgba(192,122,70,0.3);
}
.e-stat-getal { font-family: 'Cinzel', serif; font-size: 26px; font-weight: 700; color: var(--caramel); display: block; }
.e-stat-label { font-family: 'Inter', sans-serif; font-size: 10px; color: rgba(245,236,216,0.5); letter-spacing: 1.5px; text-transform: uppercase; }

/* Inschrijfformulier */
.inschrijf-box {
  background: var(--beige); padding: 48px 40px; position: relative;
}
.inschrijf-box h3 { font-family: 'Cinzel', serif; font-size: 20px; color: var(--bruin); margin-bottom: 8px; }
.inschrijf-box p { font-family: 'Lora', serif; font-size: 14px; font-style: italic; color: var(--bruin-mid); margin-bottom: 28px; }
.form-rij { display: flex; gap: 12px; }
.form-rij .form-input { flex: 1; }
.form-submit {
  width: 100%; padding: 15px; background: var(--bruin);
  color: var(--beige); font-family: 'Cinzel', serif; font-size: 12px;
  font-weight: 600; letter-spacing: 3px; text-transform: uppercase;
  border: none; cursor: pointer; margin-top: 4px;
  transition: background 0.25s;
}
.form-submit:hover { background: var(--caramel); }
.form-privacy {
  font-family: 'Inter', sans-serif; font-size: 11px;
  color: var(--bruin-mid); margin-top: 10px; text-align: center;
  opacity: 0.7;
}

/* Modules grid */
.module-grid {
  display: grid; grid-template-columns: repeat(2, 1fr);
  gap: 2px; background: var(--beige-dark);
  max-width: 1100px; margin: 0 auto;
}
.module-kaart {
  background: var(--crème); padding: 36px 40px;
  display: flex; gap: 24px; align-items: flex-start;
  transition: background 0.25s; position: relative; overflow: hidden;
}
.module-kaart::before {
  content: ''; position: absolute; left: 0; top: 0; bottom: 0;
  width: 3px; background: var(--caramel);
  transform: scaleY(0); transform-origin: bottom; transition: transform 0.3s;
}
.module-kaart:hover { background: var(--beige); }
.module-kaart:hover::before { transform: scaleY(1); }
.module-nr { font-family: 'Cinzel', serif; font-size: 11px; font-weight: 700; color: var(--caramel); letter-spacing: 2px; white-space: nowrap; padding-top: 3px; min-width: 52px; }
.module-inhoud { flex: 1; }
.module-titel { font-family: 'Lora', serif; font-size: 17px; font-weight: 500; color: var(--bruin); margin-bottom: 8px; line-height: 1.3; }
.module-omschr { font-family: 'Lora', serif; font-size: 13px; font-style: italic; color: var(--bruin-mid); line-height: 1.6; margin-bottom: 12px; }
.tag-rij { display: flex; gap: 6px; flex-wrap: wrap; }
.tag { font-family: 'Inter', sans-serif; font-size: 10px; font-weight: 500; color: var(--bruin-mid); letter-spacing: 1px; text-transform: uppercase; background: var(--beige); border: 1px solid var(--beige-dark); border-radius: 50px; padding: 3px 10px; }

.elearning-cta { text-align: center; margin-top: 56px; }
.elearning-cta p { font-family: 'Lora', serif; font-size: 16px; font-style: italic; color: var(--bruin-mid); margin-bottom: 20px; }

/* ── UMMAH ATELIER ── */
.atelier-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 60px;
  max-width: 1100px; margin: 0 auto; align-items: start;
}
.atelier-uitleg h3 { font-family: 'Cinzel', serif; font-size: 18px; color: var(--bruin); margin-bottom: 20px; }
.atelier-uitleg p { font-family: 'Lora', serif; font-size: 16px; line-height: 1.85; color: var(--tekst); margin-bottom: 16px; }
.atelier-kenmerken { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 28px; }
.kenmerk {
  background: var(--crème); padding: 20px; border: 1px solid var(--beige-dark);
  border-left: 3px solid var(--caramel);
}
.kenmerk-titel { font-family: 'Cinzel', serif; font-size: 11px; font-weight: 600; color: var(--caramel); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 6px; }
.kenmerk-tekst { font-family: 'Lora', serif; font-size: 13px; color: var(--bruin-mid); line-height: 1.5; }

/* Datum kaarten */
.datum-kaarten { display: flex; flex-direction: column; gap: 16px; }
.datum-kaart {
  background: var(--crème); border: 1px solid var(--beige-dark);
  padding: 28px 32px; display: flex; gap: 24px; align-items: center;
  transition: transform 0.2s, box-shadow 0.2s;
}
.datum-kaart:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(92,46,14,0.08); }
.datum-kaart.uitgelicht { background: var(--bruin); border-color: var(--bruin); }
.datum-datum {
  font-family: 'Cinzel', serif; text-align: center; min-width: 56px;
}
.datum-dag { font-size: 28px; font-weight: 700; color: var(--caramel); display: block; line-height: 1; }
.datum-maand { font-size: 10px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; color: var(--bruin-mid); }
.datum-kaart.uitgelicht .datum-maand { color: rgba(245,236,216,0.6); }
.datum-kaart.uitgelicht .datum-dag { color: var(--beige); }
.datum-scheiding { width: 1px; height: 50px; background: var(--beige-dark); }
.datum-kaart.uitgelicht .datum-scheiding { background: rgba(245,236,216,0.2); }
.datum-info { flex: 1; }
.datum-thema { font-family: 'Cinzel', serif; font-size: 14px; font-weight: 600; color: var(--bruin); margin-bottom: 4px; }
.datum-kaart.uitgelicht .datum-thema { color: var(--beige); }
.datum-detail { font-family: 'Lora', serif; font-size: 13px; font-style: italic; color: var(--bruin-mid); }
.datum-kaart.uitgelicht .datum-detail { color: rgba(245,236,216,0.65); }
.datum-badge {
  font-family: 'Inter', sans-serif; font-size: 10px; font-weight: 600;
  letter-spacing: 1px; text-transform: uppercase;
  background: var(--caramel); color: var(--wit);
  padding: 4px 10px; border-radius: 50px;
}
.datum-nieuw { background: var(--pastel-mint); color: var(--bruin); }
.atelier-aanmelden { text-align: center; margin-top: 20px; }
.atelier-aanmelden p { font-family: 'Lora', serif; font-size: 14px; font-style: italic; color: var(--bruin-mid); margin-bottom: 16px; }

/* ── PODCAST ── */
.podcast-sectie { background: #3A1F0A; }
.podcast-inner {
  max-width: 1000px; margin: 0 auto;
  display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;
}
.podcast-links .sectie-label { color: var(--caramel); text-align: left; }
.podcast-titel { font-family: 'Cinzel', serif; font-size: clamp(24px, 2.5vw, 36px); font-weight: 700; color: var(--beige); margin-bottom: 16px; line-height: 1.2; }
.podcast-sub { font-family: 'Lora', serif; font-size: 16px; font-style: italic; color: rgba(245,236,216,0.65); margin-bottom: 32px; line-height: 1.7; }
.podcast-gratis {
  display: inline-flex; align-items: center; gap: 10px;
  background: rgba(192,122,70,0.15); border: 1px solid rgba(192,122,70,0.4);
  border-radius: 50px; padding: 10px 20px; margin-bottom: 28px;
  font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 600;
  color: var(--caramel); letter-spacing: 2px; text-transform: uppercase;
}
.podcast-episodes { display: flex; flex-direction: column; gap: 12px; }
.episode-kaart {
  background: rgba(255,255,255,0.04); border: 1px solid rgba(245,236,216,0.1);
  padding: 20px 24px; display: flex; gap: 20px; align-items: center;
  transition: background 0.2s; cursor: pointer;
}
.episode-kaart:hover { background: rgba(255,255,255,0.07); }
.episode-play {
  width: 40px; height: 40px; border-radius: 50%;
  background: var(--caramel); display: flex; align-items: center; justify-content: center;
  flex-shrink: 0;
}
.episode-play svg { width: 14px; height: 14px; color: var(--wit); margin-left: 2px; }
.episode-info { flex: 1; }
.episode-nr { font-family: 'Inter', sans-serif; font-size: 10px; color: var(--caramel); letter-spacing: 2px; text-transform: uppercase; margin-bottom: 3px; }
.episode-titel { font-family: 'Lora', serif; font-size: 15px; color: var(--beige); margin-bottom: 3px; }
.episode-duur { font-family: 'Inter', sans-serif; font-size: 11px; color: rgba(245,236,216,0.4); }
.podcast-cta { margin-top: 24px; }
.podcast-knop {
  display: inline-flex; align-items: center; gap: 10px;
  background: none; border: 1px solid rgba(245,236,216,0.3);
  color: var(--beige); font-family: 'Cinzel', serif; font-size: 11px;
  font-weight: 600; letter-spacing: 2px; text-transform: uppercase;
  padding: 14px 28px; cursor: pointer; text-decoration: none;
  transition: border-color 0.2s, background 0.2s;
}
.podcast-knop:hover { border-color: var(--caramel); background: rgba(192,122,70,0.1); }
.podcast-visual {
  display: flex; align-items: center; justify-content: center; position: relative;
}
.podcast-cirkel {
  width: 280px; height: 280px; border-radius: 50%;
  background: rgba(192,122,70,0.08); border: 1px solid rgba(192,122,70,0.2);
  display: flex; align-items: center; justify-content: center;
  animation: drijven 6s ease-in-out infinite;
}
.podcast-inner-cirkel {
  width: 200px; height: 200px; border-radius: 50%;
  background: rgba(192,122,70,0.12); border: 1px solid rgba(192,122,70,0.3);
  display: flex; align-items: center; justify-content: center; flex-direction: column;
}
.podcast-micro { font-size: 48px; margin-bottom: 8px; }
.podcast-naam { font-family: 'Cinzel', serif; font-size: 11px; font-weight: 600; color: var(--caramel); letter-spacing: 2px; text-align: center; }

/* ── REVIEWS ── */
.reviews-sectie { background: var(--beige); }
.sterren { display: flex; gap: 4px; margin-bottom: 12px; }
.ster { color: var(--caramel); font-size: 18px; }
.ster.leeg { color: var(--beige-dark); }
.reviews-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 24px; max-width: 1100px; margin: 0 auto 64px;
}
.review-kaart {
  background: var(--crème); padding: 32px;
  border: 1px solid var(--beige-dark);
  position: relative; transition: transform 0.2s, box-shadow 0.2s;
}
.review-kaart:hover { transform: translateY(-3px); box-shadow: 0 10px 32px rgba(92,46,14,0.07); }
.review-aanhalingsteken {
  font-family: 'Georgia', serif; font-size: 64px; line-height: 1;
  color: var(--beige-dark); position: absolute; top: 16px; right: 24px;
}
.review-tekst { font-family: 'Lora', serif; font-size: 15px; line-height: 1.75; color: var(--tekst); margin-bottom: 20px; font-style: italic; }
.review-auteur { display: flex; align-items: center; gap: 12px; }
.review-avatar {
  width: 40px; height: 40px; border-radius: 50%;
  background: var(--beige-dark); display: flex; align-items: center; justify-content: center;
  font-family: 'Cinzel', serif; font-size: 14px; font-weight: 700; color: var(--bruin);
  flex-shrink: 0;
}
.review-naam { font-family: 'Lora', serif; font-size: 14px; font-weight: 500; color: var(--bruin); }
.review-datum { font-family: 'Inter', sans-serif; font-size: 11px; color: var(--bruin-mid); }
.review-gemiddeld {
  display: flex; align-items: center; gap: 20px;
  justify-content: center; margin-bottom: 48px;
}
.review-getal { font-family: 'Cinzel', serif; font-size: 52px; font-weight: 700; color: var(--bruin); line-height: 1; }
.review-van { font-family: 'Inter', sans-serif; font-size: 11px; color: var(--bruin-mid); letter-spacing: 1px; }

/* Review formulier */
.review-form-wrapper {
  max-width: 700px; margin: 0 auto;
  background: var(--crème); padding: 48px;
  border: 1px solid var(--beige-dark);
}
.review-form-wrapper h3 {
  font-family: 'Cinzel', serif; font-size: 20px; color: var(--bruin);
  margin-bottom: 6px;
}
.review-form-wrapper p {
  font-family: 'Lora', serif; font-size: 14px; font-style: italic;
  color: var(--bruin-mid); margin-bottom: 28px;
}
.ster-keuze { display: flex; gap: 8px; margin-bottom: 20px; }
.ster-keuze span {
  font-size: 28px; cursor: pointer; color: var(--beige-dark);
  transition: color 0.15s, transform 0.15s;
}
.ster-keuze span:hover, .ster-keuze span.actief { color: var(--caramel); transform: scale(1.15); }
.review-program {
  display: flex; gap: 10px; flex-wrap: wrap; margin-bottom: 20px;
}
.program-tag {
  font-family: 'Inter', sans-serif; font-size: 11px; font-weight: 500;
  color: var(--bruin-mid); letter-spacing: 1px; text-transform: uppercase;
  background: var(--beige); border: 1px solid var(--beige-dark);
  border-radius: 50px; padding: 6px 14px; cursor: pointer;
  transition: background 0.2s, border-color 0.2s, color 0.2s;
}
.program-tag.actief, .program-tag:hover {
  background: var(--bruin); border-color: var(--bruin); color: var(--beige);
}

/* ── FOOTER ── */
footer {
  background: var(--bruin); padding: 60px 80px 40px;
}
.footer-grid {
  display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 60px;
  max-width: 1100px; margin: 0 auto 48px;
}
.footer-logo-blok .nav-logo-tekst { color: var(--beige); font-size: 14px; }
.footer-logo-blok .nav-logo-tekst span { color: var(--bruin-mid); }
.footer-bio { font-family: 'Lora', serif; font-size: 14px; font-style: italic; color: rgba(245,236,216,0.55); line-height: 1.7; margin-top: 16px; }
.footer-kolom h4 { font-family: 'Cinzel', serif; font-size: 11px; font-weight: 600; color: var(--caramel); letter-spacing: 3px; text-transform: uppercase; margin-bottom: 20px; }
.footer-kolom ul { list-style: none; }
.footer-kolom ul li { margin-bottom: 10px; }
.footer-kolom ul li a { font-family: 'Lora', serif; font-size: 14px; color: rgba(245,236,216,0.6); text-decoration: none; transition: color 0.2s; }
.footer-kolom ul li a:hover { color: var(--beige); }
.footer-bottom {
  max-width: 1100px; margin: 0 auto;
  display: flex; align-items: center; justify-content: space-between;
  padding-top: 28px; border-top: 1px solid rgba(245,236,216,0.1);
  font-family: 'Inter', sans-serif; font-size: 12px;
  color: rgba(245,236,216,0.35);
}

/* ── WINKELMANDJE PANEL ── */
.cart-overlay {
  position: fixed; inset: 0; background: rgba(0,0,0,0.4); z-index: 2000;
  opacity: 0; pointer-events: none; transition: opacity 0.3s;
}
.cart-overlay.open { opacity: 1; pointer-events: all; }
.cart-panel {
  position: fixed; top: 0; right: 0; bottom: 0; width: 380px;
  background: var(--crème); z-index: 2001; padding: 32px;
  transform: translateX(100%); transition: transform 0.35s ease;
  overflow-y: auto;
}
.cart-panel.open { transform: translateX(0); }
.cart-header { display: flex; align-items: center; justify-content: space-between; margin-bottom: 32px; }
.cart-header h2 { font-family: 'Cinzel', serif; font-size: 18px; color: var(--bruin); }
.cart-sluit { background: none; border: none; cursor: pointer; font-size: 20px; color: var(--bruin-mid); }
.cart-leeg { text-align: center; padding: 60px 20px; font-family: 'Lora', serif; font-style: italic; color: var(--bruin-mid); }

/* ── ANIMATIES ── */
@keyframes fadeUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
@keyframes drijven { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-14px); } }

/* ── ANKERS ── */
section { scroll-margin-top: 72px; }

/* ── RESPONSIVE ── */
@media (max-width: 900px) {
  nav { padding: 0 20px; }
  .nav-links { display: none; }
  .hero { grid-template-columns: 1fr; }
  .hero-right { display: none; }
  .hero-left { padding: 60px 24px; }
  .sectie { padding: 60px 24px; }
  .band { padding: 60px 24px; }
  .over-ons-grid, .atelier-grid, .contact-grid, .elearning-hero, .podcast-inner, .footer-grid, .reviews-grid { grid-template-columns: 1fr; gap: 40px; }
  .module-grid { grid-template-columns: 1fr; }
  footer { padding: 48px 24px 32px; }
  .footer-bottom { flex-direction: column; gap: 12px; text-align: center; }
}
</style>
</head>
<body>

<!-- WINKELMANDJE OVERLAY -->
<div class="cart-overlay" id="cartOverlay" onclick="sluitCart()"></div>
<div class="cart-panel" id="cartPanel">
  <div class="cart-header">
    <h2>Winkelmandje</h2>
    <button class="cart-sluit" onclick="sluitCart()">✕</button>
  </div>
  <div class="cart-leeg">
    <p style="font-size:32px;margin-bottom:12px;">🛍️</p>
    Je mandje is leeg.<br>Voeg een product toe om te beginnen.
  </div>
</div>

<!-- NAV -->
<nav>
  <a href="#" class="nav-logo">
    <svg width="34" height="44" viewBox="0 0 34 44" fill="none">
      <circle cx="15" cy="17" r="14" fill="#5C2E0E"/>
      <circle cx="20" cy="14" r="12" fill="#F5ECD8"/>
      <path d="M13 30 Q9 36 11 41 Q12 44 8 47" stroke="#5C2E0E" stroke-width="1.8" stroke-linecap="round"/>
      <circle cx="8" cy="47" r="2.5" fill="#C07A46"/>
    </svg>
    <div class="nav-logo-tekst">
      HET ONBESCHREVEN PAD
      <span>ACADEMIE</span>
    </div>
  </a>
  <div class="nav-links">
    <a href="#over-ons">Over ons</a>
    <a href="#elearning">E-Learning</a>
    <a href="#atelier">Ummah Atelier</a>
    <a href="#podcast">Podcast</a>
    <a href="#reviews">Reviews</a>
    <a href="#contact">Contact</a>
  </div>
  <div class="nav-rechts">
    <button class="winkelmandje" onclick="openCart()">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
        <line x1="3" y1="6" x2="21" y2="6"/>
        <path d="M16 10a4 4 0 01-8 0"/>
      </svg>
      <span class="badge">0</span>
    </button>
  </div>
</nav>

<!-- HERO -->
<section class="hero" id="home">
  <div class="hero-left">
    <div class="hero-badge">Groeien in geloof, samen als gezin</div>
    <p class="hero-slogan">Welkom bij</p>
    <h1 class="hero-titel">Het Onbeschreven<br>Pad Academie</h1>
    <p class="hero-beschrijving">Een plek waar islamitische ouders en kinderen <em>samen leren, ontdekken en groeien</em> — vanuit geloof, pedagogiek en verbinding.</p>
    <div class="hero-knoppen">
      <a href="#elearning" class="knop-primair">Bekijk e-learning</a>
      <a href="#atelier" class="knop-sec">Ummah Atelier →</a>
    </div>
    <div class="hero-pijlers">
      <div class="pijler"><span class="pijler-getal">8</span><span class="pijler-label">Modules</span></div>
      <div class="pijler"><span class="pijler-getal">0–12</span><span class="pijler-label">Leeftijd</span></div>
      <div class="pijler"><span class="pijler-getal">100%</span><span class="pijler-label">Islamitisch</span></div>
      <div class="pijler"><span class="pijler-getal">Gratis</span><span class="pijler-label">Podcast</span></div>
    </div>
  </div>
  <div class="hero-right">
    <svg class="hero-maan" viewBox="0 0 340 340" fill="none">
      <circle cx="155" cy="170" r="140" fill="#5C2E0E"/>
      <circle cx="195" cy="152" r="126" fill="#F5ECD8"/>
      <path d="M135 305 Q120 330 127 352 Q132 368 116 385" stroke="#5C2E0E" stroke-width="4" stroke-linecap="round"/>
      <circle cx="116" cy="389" r="7" fill="#C07A46"/>
    </svg>
    <p class="hero-citaat">"Elk kind wordt geboren op de fitrah."</p>
  </div>
</section>

<!-- BAND -->
<div class="band">
  <p class="band-tekst">Wij geloven dat elk kind een <em>onbeschreven pad</em> voor zich heeft — en dat jij als ouder de eerste schrijver bent.</p>
</div>

<!-- OVER ONS -->
<section class="sectie" id="over-ons">
  <div class="sectie-header">
    <span class="sectie-label">Wie zijn wij</span>
    <h2 class="sectie-titel">Over Het Onbeschreven Pad</h2>
    <p class="sectie-sub">Een academie opgericht door twee moeders met één missie: islamitische gezinnen ondersteunen bij het bewust opvoeden van de volgende generatie.</p>
  </div>
  <div class="over-ons-grid">
    <div class="missie-blok">
      <h3>Onze Missie</h3>
      <p>Wij willen islamitische gezinnen ondersteunen bij het opvoeden van hun kinderen in een niet-islamitische samenleving. Ouders staan voor de uitdaging om hun kinderen zowel een sterke islamitische identiteit mee te geven, als hen te helpen hun weg te vinden binnen de bredere maatschappij.</p>
      <p>Wij bieden een plek waar ouders en kinderen samen kunnen leren, ontdekken en groeien. Vanuit islamitische principes en pedagogische inzichten ondersteunen we ouders bij de verantwoordelijkheid die Allah hen heeft toevertrouwd: het opvoeden van de volgende generatie — de <em>mini Ummah</em>.</p>
    </div>
    <div class="missie-blok">
      <h3>Onze Visie</h3>
      <p>Wij zien gezinnen als de hoeksteen van een sterke en veerkrachtige Ummah. Onze visie is een samenleving waarin islamitische gezinnen:</p>
      <ul class="visie-lijst">
        <li class="visie-item"><div class="visie-dot"></div><span class="visie-tekst"><strong>Liefdevol en bewust opvoeden</strong> — met een stevige basis in islamitische identiteit en waarden.</span></li>
        <li class="visie-item"><div class="visie-dot"></div><span class="visie-tekst"><strong>Spelend en ontdekkend leren</strong> — kinderen die hun geloof en waarden dagelijks ervaren.</span></li>
        <li class="visie-item"><div class="visie-dot"></div><span class="visie-tekst"><strong>Actief deelnemen aan de samenleving</strong> — integreren én culturele identiteit behouden.</span></li>
        <li class="visie-item"><div class="visie-dot"></div><span class="visie-tekst"><strong>Verbondenheid ervaren</strong> — in een veilige en inspirerende gemeenschap.</span></li>
      </ul>
    </div>
  </div>

  <!-- Team -->
  <div style="margin-top:80px;">
    <div class="sectie-header">
      <span class="sectie-label">Het team</span>
      <h2 class="sectie-titel">De gezichten achter de academie</h2>
    </div>
    <div class="team-grid">
      <div class="team-kaart">
        <div class="team-avatar">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
            <circle cx="18" cy="13" r="7" fill="#9B5E3D" opacity="0.4"/>
            <ellipse cx="18" cy="28" rx="11" ry="7" fill="#9B5E3D" opacity="0.25"/>
          </svg>
        </div>
        <div class="team-naam">Oprichter 1</div>
        <div class="team-rol">Pedagoge & islamitisch opvoedkundige</div>
        <p class="team-bio">Gepassioneerd door de verbinding tussen islamitische waarden en moderne pedagogiek. Moeder van [x] kinderen en drijvende kracht achter het Ummah Atelier.</p>
      </div>
      <div class="team-kaart">
        <div class="team-avatar">
          <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
            <circle cx="18" cy="13" r="7" fill="#C07A46" opacity="0.4"/>
            <ellipse cx="18" cy="28" rx="11" ry="7" fill="#C07A46" opacity="0.25"/>
          </svg>
        </div>
        <div class="team-naam">Oprichter 2</div>
        <div class="team-rol">Educator & content creator</div>
        <p class="team-bio">Gelooft in de kracht van bewust ouderschap. Ontwikkelt de e-learning modules en webinars met een scherp oog voor praktische toepasbaarheid.</p>
      </div>
    </div>
  </div>
</section>

<hr class="divider-lijn">

<!-- CONTACT -->
<section class="sectie sectie-alt" id="contact">
  <div class="sectie-header">
    <span class="sectie-label">Neem contact op</span>
    <h2 class="sectie-titel">Heb je een vraag?</h2>
    <p class="sectie-sub">We horen graag van je. Stuur ons een bericht en we reageren zo snel mogelijk.</p>
  </div>
  <div class="contact-grid">
    <div class="contact-info">
      <h3>Contactgegevens</h3>
      <div class="contact-item">
        <div class="contact-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
        <div class="contact-tekst"><small>E-mail</small><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f891969e97b8909d8c97969a9d8b9b908a9d8e9d9688999cd69694">[email&#160;protected]</a></div>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></div>
        <div class="contact-tekst"><small>Instagram</small>@hetonbeschrevenpad</div>
      </div>
      <div class="contact-item">
        <div class="contact-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></div>
        <div class="contact-tekst"><small>Community</small>Besloten oudergroep via onze academie</div>
      </div>
    </div>
    <form class="contact-form" action="https://formspree.io/f/mgoqgrkj" method="POST">
      <div class="form-rij">
        <input class="form-input" type="text" name="voornaam" placeholder="Voornaam" required>
        <input class="form-input" type="text" name="achternaam" placeholder="Achternaam">
      </div>
      <input class="form-input" type="email" name="email" placeholder="E-mailadres" required>
      <input class="form-input" type="text" name="_subject" placeholder="Onderwerp">
      <textarea class="form-input" name="bericht" placeholder="Je bericht..."></textarea>
      <button class="form-submit" type="submit">Verstuur bericht</button>
    </form>
  </div>
</section>

<hr class="divider-lijn">

<!-- E-LEARNING -->
<section class="sectie" id="elearning">
  <div class="sectie-header">
    <span class="sectie-label">Online leren</span>
    <h2 class="sectie-titel">E-Learning Programma</h2>
    <p class="sectie-sub">Islamitisch opvoeden in een moderne samenleving — 8 diepgaande modules, jouw tempo.</p>
  </div>

  <!-- E-learning uitleg + inschrijven -->
  <div class="elearning-hero" style="border-radius:0;margin-bottom:4px;">
    <div>
      <h2 class="elearning-titel">Sterk gezin,<br>sterke toekomst</h2>
      <p class="elearning-sub">Een volledig programma voor islamitische ouders met kinderen van 0–12 jaar. Video's, werkbladen, reflectieopdrachten en toegang tot onze besloten community.</p>
      <ul class="elearning-voordelen">
        <li>8 uitgebreide videolessen van 45–70 minuten</li>
        <li>Werkbladen en reflectieopdrachten per module</li>
        <li>Levenslange toegang tot alle materialen</li>
        <li>Toegang tot besloten ouderscommunity</li>
        <li>Certificaat van deelname na afronding</li>
      </ul>
      <div class="elearning-stats">
        <div><span class="e-stat-getal">8</span><span class="e-stat-label">Modules</span></div>
        <div><span class="e-stat-getal">±6u</span><span class="e-stat-label">Video</span></div>
        <div><span class="e-stat-getal">0–12</span><span class="e-stat-label">Leeftijd</span></div>
      </div>
    </div>

    <!-- Inschrijfformulier -->
    <div class="inschrijf-box">
      <h3>Schrijf je in</h3>
      <p>Ontvang direct toegang via e-mail.</p>
      <form action="https://formspree.io/f/xgoqgraj" method="POST">
        <div class="form-rij" style="margin-bottom:12px;">
          <input class="form-input" type="text" name="voornaam" placeholder="Voornaam" required>
          <input class="form-input" type="text" name="achternaam" placeholder="Achternaam">
        </div>
        <input class="form-input" type="email" name="email" placeholder="E-mailadres" style="margin-bottom:12px;width:100%;" required>
        <select class="form-input" name="leeftijd_kind" style="margin-bottom:12px;width:100%;">
          <option value="">Leeftijd kind(eren)</option>
          <option>0 – 3 jaar</option>
          <option>3 – 6 jaar</option>
          <option>6 – 12 jaar</option>
          <option>Meerdere leeftijden</option>
        </select>
        <input type="hidden" name="_subject" value="Nieuwe inschrijving E-Learning">
        <button class="form-submit" type="submit">Inschrijven & ontvang toegang</button>
        <p class="form-privacy">🔒 Je gegevens worden vertrouwelijk behandeld. Geen spam.</p>
      </form>
    </div>
  </div>

  <!-- Module overzicht -->
  <div style="margin-top:56px;">
    <div class="sectie-header">
      <span class="sectie-label">De inhoud</span>
      <h3 class="sectie-titel" style="font-size:clamp(22px,2.2vw,30px);">Alle 8 modules</h3>
    </div>
    <div class="module-grid">
      <div class="module-kaart"><div class="module-nr">01</div><div class="module-inhoud"><div class="module-titel">Wie ben jij als ouder?</div><p class="module-omschr">Reflecteer op jouw opvoedvisie en het concept van het onbeschreven pad.</p><div class="tag-rij"><span class="tag">Video</span><span class="tag">Reflectie</span><span class="tag">45 min</span></div></div></div>
      <div class="module-kaart"><div class="module-nr">02</div><div class="module-inhoud"><div class="module-titel">De Islamitische Identiteit van je Kind</div><p class="module-omschr">Hoe bouw je op een liefdevolle manier een sterke islamitische basis op?</p><div class="tag-rij"><span class="tag">Video</span><span class="tag">Werkblad</span><span class="tag">60 min</span></div></div></div>
      <div class="module-kaart"><div class="module-nr">03</div><div class="module-inhoud"><div class="module-titel">Opvoeden met Liefde en Grenzen</div><p class="module-omschr">Het islamitische evenwicht tussen warmte en duidelijkheid.</p><div class="tag-rij"><span class="tag">Video</span><span class="tag">Audio</span><span class="tag">50 min</span></div></div></div>
      <div class="module-kaart"><div class="module-nr">04</div><div class="module-inhoud"><div class="module-titel">Spelend Leren — De Mini Ummah</div><p class="module-omschr">Islamitische waarden doorgeven via spel, ontdekking en creativiteit.</p><div class="tag-rij"><span class="tag">Video</span><span class="tag">Activiteiten</span><span class="tag">55 min</span></div></div></div>
      <div class="module-kaart"><div class="module-nr">05</div><div class="module-inhoud"><div class="module-titel">Geloof Uitleggen aan je Kind</div><p class="module-omschr">Antwoorden op de moeilijke vragen die kinderen stellen.</p><div class="tag-rij"><span class="tag">Video</span><span class="tag">Werkblad</span><span class="tag">60 min</span></div></div></div>
      <div class="module-kaart"><div class="module-nr">06</div><div class="module-inhoud"><div class="module-titel">School, Vrienden en Islamitische Waarden</div><p class="module-omschr">Je kind begeleiden in de wereld buiten het gezin.</p><div class="tag-rij"><span class="tag">Video</span><span class="tag">Gespreksgids</span><span class="tag">65 min</span></div></div></div>
      <div class="module-kaart"><div class="module-nr">07</div><div class="module-inhoud"><div class="module-titel">Balanceren tussen Integratie en Identiteit</div><p class="module-omschr">Hoe vind je als islamitisch gezin je plek in Nederland?</p><div class="tag-rij"><span class="tag">Webinar</span><span class="tag">Discussie</span><span class="tag">70 min</span></div></div></div>
      <div class="module-kaart"><div class="module-nr">08</div><div class="module-inhoud"><div class="module-titel">Groeien als Ouder — Jouw Onbeschreven Pad</div><p class="module-omschr">Sluit af met een persoonlijk actieplan en een du'a voor je gezin.</p><div class="tag-rij"><span class="tag">Video</span><span class="tag">Actieplan</span><span class="tag">45 min</span></div></div></div>
    </div>
    <div class="elearning-cta">
      <p>Wil je alle details zien? Bekijk de volledige landingspagina van het programma.</p>
      <a href="hop_elearning_landingspagina.html" class="knop-primair" target="_blank">Bekijk volledige programmapagina →</a>
    </div>
  </div>
</section>

<hr class="divider-lijn">

<!-- UMMAH ATELIER -->
<section class="sectie sectie-alt" id="atelier">
  <div class="sectie-header">
    <span class="sectie-label">Voor kinderen</span>
    <h2 class="sectie-titel">Ummah Atelier</h2>
    <p class="sectie-sub">Mini Ummah, spelend leren — een unieke plek waar kinderen op speelse wijze islamitische waarden ontdekken.</p>
  </div>
  <div class="atelier-grid">
    <div class="atelier-uitleg">
      <h3>Wat is het Ummah Atelier?</h3>
      <p>Het Ummah Atelier is een speelse, creatieve omgeving speciaal voor kinderen van 2–8 jaar. Samen met andere kinderen ontdekken ze de wereld vanuit islamitische waarden — door te bouwen, te tekenen, te luisteren naar verhalen van de Profeten en te spelen.</p>
      <p>Ouders kunnen bijwonen of de tijd gebruiken voor de bijbehorende ouderworkshop. Zo leren ouder en kind tegelijk, op hun eigen niveau.</p>
      <div class="atelier-kenmerken">
        <div class="kenmerk"><div class="kenmerk-titel">Leeftijd</div><div class="kenmerk-tekst">2 tot 8 jaar</div></div>
        <div class="kenmerk"><div class="kenmerk-titel">Duur</div><div class="kenmerk-tekst">±2 uur per sessie</div></div>
        <div class="kenmerk"><div class="kenmerk-titel">Thema's</div><div class="kenmerk-tekst">Wisselend per datum</div></div>
        <div class="kenmerk"><div class="kenmerk-titel">Locatie</div><div class="kenmerk-tekst">Wordt bekend gemaakt</div></div>
      </div>
    </div>

    <div>
      <div style="margin-bottom:20px;">
        <span class="sectie-label" style="text-align:left;">Aankomende data</span>
        <h3 style="font-family:'Cinzel',serif;font-size:18px;color:var(--bruin);margin-bottom:20px;">Plan je bezoek</h3>
      </div>
      <div class="datum-kaarten">
        <div class="datum-kaart uitgelicht">
          <div class="datum-datum"><span class="datum-dag">12</span><span class="datum-maand">Apr</span></div>
          <div class="datum-scheiding"></div>
          <div class="datum-info">
            <div class="datum-thema">Moskee Bouwhoek</div>
            <div class="datum-detail">Bouwen, ontdekken & verhalen — 10:00–12:00</div>
          </div>
          <span class="datum-badge">Binnenkort</span>
        </div>
        <div class="datum-kaart">
          <div class="datum-datum"><span class="datum-dag">10</span><span class="datum-maand">Mei</span></div>
          <div class="datum-scheiding"></div>
          <div class="datum-info">
            <div class="datum-thema">Verhalen van de Profeten</div>
            <div class="datum-detail">Creatief naspelen & luisteren — 10:00–12:00</div>
          </div>
          <span class="datum-badge datum-nieuw">Nieuw</span>
        </div>
        <div class="datum-kaart">
          <div class="datum-datum"><span class="datum-dag">07</span><span class="datum-maand">Jun</span></div>
          <div class="datum-scheiding"></div>
          <div class="datum-info">
            <div class="datum-thema">Natuur & Schepping</div>
            <div class="datum-detail">Buiten ontdekken & dankbaarheid — 10:00–12:00</div>
          </div>
          <span class="datum-badge">Zomer</span>
        </div>
      </div>
      <div class="atelier-aanmelden">
        <p>Aanmelden? Stuur ons een berichtje of schrijf je in via het formulier.</p>
        <a href="#contact" class="knop-primair">Aanmelden voor het Atelier</a>
      </div>
    </div>
  </div>
</section>

<hr class="divider-lijn">

<!-- PODCAST -->
<section class="sectie podcast-sectie" id="podcast">
  <div class="podcast-inner">
    <div class="podcast-links">
      <span class="sectie-label">Gratis luisteren</span>
      <div class="podcast-gratis">✦ Volledig gratis toegang</div>
      <h2 class="podcast-titel">De Podcast van<br>Het Onbeschreven Pad</h2>
      <p class="podcast-sub">Eerlijke gesprekken over islamitisch ouderschap, pedagogiek en het leven als moslimgezin in Nederland. Luister wanneer het jou uitkomt.</p>
      <div class="podcast-episodes">
        <div class="episode-kaart">
          <div class="episode-play"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5,3 19,12 5,21"/></svg></div>
          <div class="episode-info">
            <div class="episode-nr">Aflevering 01</div>
            <div class="episode-titel">Wie is de islamitische ouder van vandaag?</div>
            <div class="episode-duur">38 min · Introductie</div>
          </div>
        </div>
        <div class="episode-kaart">
          <div class="episode-play"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5,3 19,12 5,21"/></svg></div>
          <div class="episode-info">
            <div class="episode-nr">Aflevering 02</div>
            <div class="episode-titel">Hoe praat je met je kind over Allah?</div>
            <div class="episode-duur">42 min · Geloof & opvoeding</div>
          </div>
        </div>
        <div class="episode-kaart">
          <div class="episode-play"><svg viewBox="0 0 24 24" fill="currentColor"><polygon points="5,3 19,12 5,21"/></svg></div>
          <div class="episode-info">
            <div class="episode-nr">Aflevering 03</div>
            <div class="episode-titel">Grenzen stellen met liefde — islamitisch gezien</div>
            <div class="episode-duur">47 min · Pedagogiek</div>
          </div>
        </div>
      </div>
      <div class="podcast-cta">
        <a href="#" class="podcast-knop">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polygon points="10,8 16,12 10,16"/></svg>
          Alle afleveringen beluisteren
        </a>
      </div>
    </div>
    <div class="podcast-visual">
      <div class="podcast-cirkel">
        <div class="podcast-inner-cirkel">
          <div class="podcast-micro">🎙️</div>
          <div class="podcast-naam">HET ONBESCHREVEN<br>PAD PODCAST</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="sectie reviews-sectie" id="reviews">
  <div class="sectie-header">
    <span class="sectie-label">Ervaringen</span>
    <h2 class="sectie-titel">Wat ouders zeggen</h2>
    <p class="sectie-sub">Lees de ervaringen van andere islamitische ouders die het programma hebben gevolgd.</p>
  </div>

  <!-- Gemiddelde score -->
  <div class="review-gemiddeld">
    <div class="review-getal">4.9</div>
    <div>
      <div class="sterren" style="margin-bottom:6px;">
        <span class="ster">★</span><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span>
      </div>
      <div class="review-van">Gebaseerd op 24 beoordelingen</div>
    </div>
  </div>

  <!-- Reviews grid -->
  <div class="reviews-grid">
    <div class="review-kaart">
      <div class="review-aanhalingsteken">"</div>
      <div class="sterren"><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span></div>
      <p class="review-tekst">Dit programma heeft mij echt geraakt. Ik voelde me na elke module sterker als ouder. De combinatie van islamitische kennis en praktische pedagogiek is precies wat ik zocht.</p>
      <div class="review-auteur">
        <div class="review-avatar">F</div>
        <div><div class="review-naam">Fatima M.</div><div class="review-datum">E-Learning · Maart 2025</div></div>
      </div>
    </div>
    <div class="review-kaart">
      <div class="review-aanhalingsteken">"</div>
      <div class="sterren"><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span></div>
      <p class="review-tekst">Het Ummah Atelier is een verrijking voor mijn dochter. Ze komt altijd stralend thuis en vertelt over de verhalen van de Profeten. Zo blij dat dit bestaat!</p>
      <div class="review-auteur">
        <div class="review-avatar">A</div>
        <div><div class="review-naam">Amina K.</div><div class="review-datum">Ummah Atelier · Februari 2025</div></div>
      </div>
    </div>
    <div class="review-kaart">
      <div class="review-aanhalingsteken">"</div>
      <div class="sterren"><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span><span class="ster">★</span></div>
      <p class="review-tekst">Eindelijk een plek die begrijpt wat wij als moslimouders nodig hebben. De podcast luister ik elke week. Warm, eerlijk en zo herkenbaar. Barakallahu feekum!</p>
      <div class="review-auteur">
        <div class="review-avatar">S</div>
        <div><div class="review-naam">Sara B.</div><div class="review-datum">Podcast · Januari 2025</div></div>
      </div>
    </div>
  </div>

  <!-- Review formulier -->
  <div class="review-form-wrapper">
    <h3>Laat jouw ervaring achter</h3>
    <p>Heb jij deelgenomen aan een van onze programma's? We horen graag wat jij ervan vond.</p>

    <form onsubmit="reviewVersturen(event)">
      <!-- Programma keuze -->
      <div style="margin-bottom:20px;">
        <label style="font-family:'Inter',sans-serif;font-size:11px;color:var(--bruin-mid);letter-spacing:2px;text-transform:uppercase;display:block;margin-bottom:10px;">Over welk onderdeel?</label>
        <div class="review-program">
          <span class="program-tag actief" onclick="selecteerProgram(this)">E-Learning</span>
          <span class="program-tag" onclick="selecteerProgram(this)">Ummah Atelier</span>
          <span class="program-tag" onclick="selecteerProgram(this)">Podcast</span>
          <span class="program-tag" onclick="selecteerProgram(this)">Workshop</span>
          <span class="program-tag" onclick="selecteerProgram(this)">Algemeen</span>
        </div>
      </div>

      <!-- Sterren -->
      <div style="margin-bottom:20px;">
        <label style="font-family:'Inter',sans-serif;font-size:11px;color:var(--bruin-mid);letter-spacing:2px;text-transform:uppercase;display:block;margin-bottom:10px;">Jouw beoordeling</label>
        <div class="ster-keuze" id="sterKeuze">
          <span onclick="setSter(1)" data-ster="1">☆</span>
          <span onclick="setSter(2)" data-ster="2">☆</span>
          <span onclick="setSter(3)" data-ster="3">☆</span>
          <span onclick="setSter(4)" data-ster="4">☆</span>
          <span onclick="setSter(5)" data-ster="5">☆</span>
        </div>
      </div>

      <!-- Naam + locatie -->
      <div class="form-rij" style="margin-bottom:14px;">
        <input class="form-input" type="text" placeholder="Jouw voornaam" required id="reviewNaam">
        <input class="form-input" type="text" placeholder="Stad (optioneel)">
      </div>

      <!-- Review tekst -->
      <textarea class="form-input" id="reviewTekst" placeholder="Schrijf hier jouw ervaring... (minimaal 20 tekens)" style="margin-bottom:14px;min-height:120px;width:100%;" required minlength="20"></textarea>

      <!-- Toestemming -->
      <label style="display:flex;gap:12px;align-items:flex-start;margin-bottom:20px;cursor:pointer;">
        <input type="checkbox" required style="margin-top:3px;accent-color:var(--bruin);">
        <span style="font-family:'Lora',serif;font-size:13px;color:var(--bruin-mid);line-height:1.5;">
          Ik geef toestemming om mijn review te plaatsen op de website van Het Onbeschreven Pad Academie.
        </span>
      </label>

      <button class="form-submit" type="submit">Verstuur mijn review</button>
      <p class="form-privacy" id="reviewBevestiging" style="display:none;color:var(--caramel);font-weight:600;margin-top:14px;">
        ✓ Dank je wel! Je review wordt beoordeeld en daarna geplaatst.
      </p>
    </form>
  </div>
</section>

<hr class="divider-lijn">

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-logo-blok">
      <div class="nav-logo-tekst" style="font-size:14px;">
        HET ONBESCHREVEN PAD
        <span>ACADEMIE</span>
      </div>
      <p class="footer-bio">Een academie voor islamitische ouders en kinderen — groeien in geloof, kennis en verbinding. Sterk gezin, sterke toekomst.</p>
    </div>
    <div class="footer-kolom">
      <h4>Academie</h4>
      <ul>
        <li><a href="#over-ons">Over ons</a></li>
        <li><a href="#elearning">E-Learning</a></li>
        <li><a href="#atelier">Ummah Atelier</a></li>
        <li><a href="#podcast">Podcast</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <div class="footer-kolom">
      <h4>Programma</h4>
      <ul>
        <li><a href="#elearning">Modules overzicht</a></li>
        <li><a href="#elearning">Inschrijven</a></li>
        <li><a href="#atelier">Atelier data</a></li>
        <li><a href="#">Workshops</a></li>
        <li><a href="#">Webinars</a></li>
        <li><a href="#reviews">Reviews</a></li>
    </div>
    <div class="footer-kolom">
      <h4>Volg ons</h4>
      <ul>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">TikTok</a></li>
        <li><a href="#">Spotify Podcast</a></li>
        <li><a href="#">YouTube</a></li>
        <li><a href="#">LinkedIn</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Het Onbeschreven Pad Academie. Alle rechten voorbehouden.</span>
    <span>Groeien in geloof, samen als gezin</span>
  </div>
</footer>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
function openCart() {
  document.getElementById('cartOverlay').classList.add('open');
  document.getElementById('cartPanel').classList.add('open');
}
function sluitCart() {
  document.getElementById('cartOverlay').classList.remove('open');
  document.getElementById('cartPanel').classList.remove('open');
}
function setSter(n) {
  gekozenSter = n;
  document.querySelectorAll('#sterKeuze span').forEach((s, i) => {
    s.textContent = i < n ? '★' : '☆';
    s.classList.toggle('actief', i < n);
  });
}
function selecteerProgram(el) {
  document.querySelectorAll('.program-tag').forEach(t => t.classList.remove('actief'));
  el.classList.add('actief');
}
function reviewVersturen(e) {
  e.preventDefault();
  if (!gekozenSter) { alert('Kies een beoordeling (1-5 sterren)'); return; }
  document.getElementById('reviewBevestiging').style.display = 'block';
  e.target.querySelector('.form-submit').textContent = '✓ Verstuurd!';
  e.target.querySelector('.form-submit').style.background = 'var(--bruin-mid)';
  e.target.querySelector('.form-submit').disabled = true;
}
let gekozenSter = 0;

  e.preventDefault();
  const btn = e.target.querySelector('.form-submit');
  btn.textContent = '✓ Je ontvangt een e-mail met toegang!';
  btn.style.background = '#9B5E3D';
  btn.disabled = true;
}
// Smooth nav highlight
const secties = document.querySelectorAll('section[id]');
window.addEventListener('scroll', () => {
  let huidig = '';
  secties.forEach(s => {