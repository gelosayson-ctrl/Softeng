<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact Us</title>

  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#06b6d4;
      --muted:#93a5b1;
      --text:#e6eef3;
      --radius:12px;
      --gap:14px;
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0;
      background:linear-gradient(180deg,#071021 0%, #071827 60%);
      color:var(--text);
      display:flex;
      align-items:center;
      justify-content:center;
      padding:24px;
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
    }

    .container{
      width:100%;
      max-width:920px;
      display:grid;
      grid-template-columns: 1fr 430px;
      gap:28px;
      align-items:start;
    }

    /* Card / Left: info */
    .info {
      background: linear-gradient(180deg, rgba(6,182,212,0.06), transparent 40%);
      border-radius:var(--radius);
      padding:28px;
      border:1px solid rgba(255,255,255,0.03);
      box-shadow: 0 8px 30px rgba(2,6,23,0.6), inset 0 1px 0 rgba(255,255,255,0.02);
    }
    .info h1{
      margin:0 0 6px 0;
      font-size:1.6rem;
      letter-spacing:-0.2px;
    }
    .info p{ margin:0 0 14px 0; color:var(--muted); line-height:1.5 }
    .contacts{
      display:flex;
      flex-direction:column;
      gap:10px;
      margin-top:12px;
      color:var(--muted);
    }
    .contact-item{display:flex;gap:10px;align-items:center}
    .chip{
      background:rgba(255,255,255,0.03);
      padding:8px 10px;
      border-radius:999px;
      font-size:0.85rem;
      color:var(--text);
      border:1px solid rgba(255,255,255,0.02);
    }

    /* Right: form card */
    form.card{
      background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius:var(--radius);
      padding:22px;
      border:1px solid rgba(255,255,255,0.03);
      box-shadow: 0 10px 40px rgba(2,6,23,0.6);
    }

    .row{display:flex;gap:var(--gap);flex-wrap:wrap}
    .field{
      display:flex;
      flex-direction:column;
      gap:8px;
      margin-bottom:12px;
      width:100%;
    }
    .field.half{width:calc(50% - var(--gap)/2)}
    label{
      font-size:0.9rem;
      color:var(--muted);
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea,
    select{
      background:transparent;
      border:1px solid rgba(255,255,255,0.07);
      padding:10px 12px;
      border-radius:10px;
      color:var(--text);
      font-size:0.98rem;
      outline:none;
      transition:box-shadow .12s, border-color .12s;
      min-height:40px;
    }
    input:focus, textarea:focus, select:focus{
      box-shadow: 0 6px 20px rgba(6,182,212,0.08);
      border-color: var(--accent);
    }
    textarea{
      min-height:140px;
      resize:vertical;
      padding-top:12px;
    }

    .small{
      font-size:0.85rem;
      color:var(--muted);
    }

    .actions{
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:12px;
      margin-top:6px;
    }

    button.primary{
      background:linear-gradient(90deg,var(--accent), #0891b2);
      border:0;
      color:#052026;
      font-weight:600;
      padding:10px 16px;
      border-radius:10px;
      cursor:pointer;
      box-shadow: 0 8px 20px rgba(6,182,212,0.12);
      transition:transform .08s ease, box-shadow .12s;
    }
    button.primary:active{transform:translateY(1px)}
    button.ghost{
      background:transparent;
      color:var(--muted);
      border:1px solid rgba(255,255,255,0.04);
      padding:8px 12px;
      border-radius:8px;
      cursor:pointer;
    }

    .error{
      color:#ffb4b4;
      font-size:0.86rem;
    }

    /* responsive */
    @media (max-width:880px){
      .container{ grid-template-columns: 1fr; }
      .field.half{ width:100% }
    }
  </style>
</head>

<body>
  <div class="container" role="main">
    <aside class="info" aria-labelledby="contact-title">
      <h1 id="contact-title">Contact Us</h1>
      <p>Have a question, feedback, or want a quote? Fill the form and we'll reply within 1–2 business days.</p>

      <div class="contacts" aria-hidden="false">
        <div class="contact-item">
          <div class="chip">📧</div>
          <div>
            <div style="font-weight:600">Email</div>
            <div class="small">support@example.com</div>
          </div>
        </div>

        <div class="contact-item">
          <div class="chip">📞</div>
          <div>
            <div style="font-weight:600">Phone</div>
            <div class="small">+1 (555) 424-2424</div>
          </div>
        </div>

        <div class="contact-item">
          <div class="chip">⏰</div>
          <div>
            <div style="font-weight:600">Hours</div>
            <div class="small">Mon–Fri 9:00–18:00</div>
          </div>
        </div>
      </div>
    </aside>

    <!--
      NOTE: Replace action="#" with your server endpoint, e.g. action="/api/contact"
      Use method="post" when sending real data.
    -->
    <form class="card" action="#" method="post" novalidate>
      <div class="row">
        <div class="field half">
          <label for="name">Full name</label>
          <input id="name" name="name" type="text" autocomplete="name" required placeholder="Jane Doe" />
          <div class="error" id="nameErr" aria-live="polite" hidden>Required</div>
        </div>

        <div class="field half">
          <label for="email">Email address</label>
          <input id="email" name="email" type="email" autocomplete="email" required placeholder="you@example.com" />
          <div class="error" id="emailErr" aria-live="polite" hidden>Enter a valid email</div>
        </div>
      </div>

      <div class="row">
        <div class="field">
          <label for="subject">Subject</label>
          <input id="subject" name="subject" type="text" placeholder="What is this about?" />
        </div>
      </div>

      <div class="row">
        <div class="field">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Tell us what's on your mind..." required></textarea>
          <div class="small">Max 2000 characters</div>
        </div>
      </div>

      <div class="row" style="align-items:center;justify-content:space-between;">
        <div style="display:flex;gap:12px;align-items:center;">
          <input id="subscribe" name="subscribe" type="checkbox" />
          <label for="subscribe" class="small">Subscribe to updates</label>
        </div>

        <div class="small">We respect your privacy. No spam.</div>
      </div>

      <div class="actions">
        <div class="small">By sending you agree to our <a href="#" style="color:var(--accent)">privacy policy</a>.</div>
        <div style="display:flex;gap:8px;">
          <button type="reset" class="ghost">Reset</button>
          <button type="submit" class="primary">Send message</button>
        </div>
      </div>
    </form>
  </div>

  <script>
    // Small client-side validation enhancement (optional)
    (function(){
      const form = document.querySelector('form');
      const nameEl = document.getElementById('name');
      const emailEl = document.getElementById('email');
      const nameErr = document.getElementById('nameErr');
      const emailErr = document.getElementById('emailErr');

      function show(el, msg){
        el.hidden = false;
        el.textContent = msg;
      }
      function hide(el){
        el.hidden = true;
      }

      function validEmail(value){
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
      }

      form.addEventListener('submit', function(e){
        let ok = true;

        if (!nameEl.value.trim()){
          show(nameErr, 'Please enter your name');
          ok = false;
        } else hide(nameErr);

        if (!validEmail(emailEl.value.trim())){
          show(emailErr, 'Please enter a valid email address');
          ok = false;
        } else hide(emailErr);

        if (!ok){
          e.preventDefault();
          emailEl.focus();
        }

        // If desired: perform AJAX here instead of letting the form submit.
      });
    })();
  </script>
</body>
</html>
