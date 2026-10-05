<?php
// Cambric Utopia — homepage
$m = (int) date('n');
$season = in_array($m, [12, 1, 2]) ? 'Winter' : (in_array($m, [3, 4, 5]) ? 'Spring' : (in_array($m, [6, 7, 8]) ? 'Summer' : 'Autumn'));
$note = [
  'Winter' => 'Layer a cambric shirt under fine knitwear: it breathes indoors and keeps collars crisp.',
  'Spring' => 'Switch to lawn and chambray as days warm, and bring out the light trench.',
  'Summer' => 'Reach for voile and batiste on the hottest days, and keep a cambric shirt for evenings.',
  'Autumn' => 'Poplin shirts and chambray overshirts bridge the gap between summer and knitwear weather.'
][$season];
$msg = ''; $ok = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['letter_email'])) {
    $email = trim((string) filter_input(INPUT_POST, 'letter_email', FILTER_SANITIZE_EMAIL));
    if (!empty($_POST['website'])) { $ok = true; $msg = 'Thank you.'; }
    elseif ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        @file_put_contents(__DIR__ . '/subscribers.txt', date('c') . "\t" . $email . PHP_EOL, FILE_APPEND | LOCK_EX);
        $ok = true; $msg = 'Thank you. The next Utopia Letter will arrive at the start of the month.';
    } else { $msg = 'Please enter a valid email address.'; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cambric Utopia | Fine Cotton Fashion: Fabrics, Fit &amp; Capsule Wardrobe</title>
<meta name="description" content="An independent fashion guide to fine cotton: what cambric is, how it compares to lawn, voile and poplin, shirt fit, ironing, a capsule wardrobe checklist and more.">
<meta name="robots" content="index, follow, max-image-preview:large">
<link rel="canonical" href="https://www.cambricutopia.com/">
<meta property="og:type" content="website"><meta property="og:site_name" content="Cambric Utopia">
<meta property="og:title" content="Cambric Utopia | Fine Cotton Fashion: Fabrics, Fit &amp; Capsule Wardrobe"><meta property="og:description" content="An independent fashion guide to fine cotton: what cambric is, how it compares to lawn, voile and poplin, shirt fit, ironing, a capsule wardrobe checklist and more.">
<meta property="og:url" content="https://www.cambricutopia.com/"><meta property="og:image" content="https://images.unsplash.com/photo-1600884350802-c6d0bf14dcc6?auto=format&fit=crop&w=1200&q=75">
<meta name="twitter:card" content="summary_large_image"><meta name="theme-color" content="#1B2340">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 40 40'%3E%3Crect width='40' height='40' fill='%231B2340'/%3E%3Ctext x='20' y='28' font-family='Georgia,serif' font-size='22' text-anchor='middle' fill='%23F1D6CF'%3ECu%3C/text%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="preconnect" href="https://images.unsplash.com">
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&family=Libre+Caslon+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-0LY0HY7L01');
</script>
<script type="application/ld+json">[{"@context": "https://schema.org", "@type": "Organization", "name": "Cambric Utopia", "url": "https://www.cambricutopia.com/", "email": "hello@cambricutopia.com", "telephone": "+1-888-777-5845", "address": {"@type": "PostalAddress", "streetAddress": "181 Mercer Street", "addressLocality": "New York", "addressRegion": "NY", "postalCode": "10012", "addressCountry": "US"}}, {"@context": "https://schema.org", "@type": "FAQPage", "mainEntity": [{"@type": "Question", "name": "What is cambric fabric?", "acceptedAnswer": {"@type": "Answer", "text": "Cambric is a fine, closely woven plain-weave fabric, originally made from linen and now most often from cotton. After weaving it is usually calendered, pressed between heated rollers, which gives it a smooth surface and a gentle sheen."}}, {"@type": "Question", "name": "Where does the name come from?", "acceptedAnswer": {"@type": "Answer", "text": "The word comes from Cambrai, a town in northern France that was famous for weaving fine linen cloth. In French the fabric is called batiste, a name now often used for a related, softer weave."}}, {"@type": "Question", "name": "Is cambric good for summer?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Cambric is lightweight, breathable and absorbent, so it feels comfortable in warm weather. Its dense weave also means it is less sheer than voile or some lawns."}}, {"@type": "Question", "name": "How do I keep white cotton bright?", "acceptedAnswer": {"@type": "Answer", "text": "Wash whites separately in cool or warm water, avoid overloading the machine, and dry in fresh air when possible. Treat stains quickly and avoid excessive bleach, which can weaken cotton fibres over time."}}, {"@type": "Question", "name": "Does cambric wrinkle?", "acceptedAnswer": {"@type": "Answer", "text": "Like most fine cottons it can crease, but it irons easily to a crisp finish. Hanging shirts as soon as the wash cycle ends reduces wrinkles considerably."}}, {"@type": "Question", "name": "Does Cambric Utopia sell clothing?", "acceptedAnswer": {"@type": "Answer", "text": "No. We are an independent fashion guide. We do not sell clothing and are not affiliated with any brand or retailer."}}]}]</script>
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="hdr">
  <div class="wrap">
    <a class="logo" href="index.php" aria-label="Cambric Utopia home">Cambric <i>Utopia</i><small>fine cotton living</small></a>
    <nav aria-label="Main navigation"><ul class="nav" id="nav"><li><a href="index.php" aria-current="page"><span>01</span>Home</a></li><li><a href="fabric-guide.html"><span>02</span>Fabric Guide</a></li><li><a href="style-guide.html"><span>03</span>Style Guide</a></li><li><a href="about.html"><span>04</span>About</a></li><li><a href="contact.html"><span>05</span>Contact</a></li></ul></nav>
    <button class="burger" aria-label="Open menu" aria-expanded="false" aria-controls="nav"><span></span><span></span><span></span></button>
  </div>
</header>
<main id="main">
<section class="hero">
  <div class="l">
    <span class="idx"><b>01</b><?php echo $season; ?> notes</span>
    <h1>The ideal wardrobe is <i>lighter</i> than you think.</h1>
    <p>Cambric Utopia is an independent guide to fine cotton fashion. We explore the fabrics behind beautiful shirts and blouses, how to wear and care for them, and how to build a calm, lasting wardrobe around them.</p>
    <div class="ctas"><a class="btn btn--w" href="fabric-guide.html">Explore fabrics</a><a class="btn btn--l" style="color:#fff;border-color:#B8C2DC" href="#capsule">Build a capsule</a></div>
  </div>
  <div class="r">
    <img src="https://images.unsplash.com/photo-1600884350802-c6d0bf14dcc6?auto=format&fit=crop&w=1100&q=75" alt="woman wearing a crisp white button-up shirt" width="1100" height="1400" fetchpriority="high">
    <div class="tagcard"><b>Fine cotton</b>Plain weave &middot; calendered finish &middot; <?php echo $season; ?> layering</div>
  </div>
</section>

<section class="def" aria-labelledby="df-t">
  <div class="wrap def-grid">
    <div>
      <span class="idx"><b>02</b>A definition</span>
            <div class="entry">
        <h2 class="word" id="df-t" style="margin:0">cambric</h2>
        <p class="pron">/&#712;ke&#618;mbr&#618;k/ &middot; noun</p>
        <ol>
          <li>A fine, dense, plain-weave fabric of cotton or linen, finished with a smooth surface and soft lustre.</li>
          <li>The cloth of choice for crisp shirts, delicate blouses, nightwear and handkerchiefs.</li>
        </ol>
        <p class="ety">Origin: named after Cambrai, a town in northern France renowned for its fine linen weaving.</p>
      </div>
      <p style="margin-top:24px" class="muted">We named this site after cambric because it represents what we love in fashion: simple materials, made well, that feel good to wear and only get better with care.</p>
    </div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1612654516785-0e1a96be21d1?auto=format&fit=crop&w=700&q=75" alt="folded white cotton textile resting on a wooden table" width="700" height="933" loading="lazy"></div>
  </div>
</section>

<section class="weave" aria-labelledby="wv-t">
  <div class="wrap">
    <div class="weave-head"><div><span class="idx"><b>03</b>Weave explorer</span><h2 id="wv-t">Six fine cottons, side by side</h2></div><p>All six are plain weaves, yet each feels completely different. Select a swatch to see how it behaves and what it is best for.</p></div>
    <div class="swatches" role="group" aria-label="Fabric weaves"><button type="button" class="sw" data-w="cambric" aria-pressed="true"><i class="tex t-cambric" style="display:block" aria-hidden="true"></i><span>Cambric</span></button><button type="button" class="sw" data-w="lawn" aria-pressed="false"><i class="tex t-lawn" style="display:block" aria-hidden="true"></i><span>Lawn</span></button><button type="button" class="sw" data-w="voile" aria-pressed="false"><i class="tex t-voile" style="display:block" aria-hidden="true"></i><span>Voile</span></button><button type="button" class="sw" data-w="poplin" aria-pressed="false"><i class="tex t-poplin" style="display:block" aria-hidden="true"></i><span>Poplin</span></button><button type="button" class="sw" data-w="batiste" aria-pressed="false"><i class="tex t-batiste" style="display:block" aria-hidden="true"></i><span>Batiste</span></button><button type="button" class="sw" data-w="chambray" aria-pressed="false"><i class="tex t-chambray" style="display:block" aria-hidden="true"></i><span>Chambray</span></button></div>
    <div class="w-detail" id="wdetail" aria-live="polite">
      <div class="big t-cambric" aria-hidden="true"></div>
      <div>
        <h3>Cambric</h3>
        <p data-k="d">A fine, dense plain weave, traditionally linen and now usually cotton, calendered (pressed between rollers) for a soft sheen.</p>
        <dl><dt>Feel</dt><dd data-k="f">Smooth, crisp, slightly glossy</dd><dt>Best for</dt><dd data-k="u">Shirts, blouses, nightwear, handkerchiefs, linings</dd></dl>
      </div>
    </div>
  </div>
</section>

<section class="capsule" id="capsule" aria-labelledby="cp-t">
  <div class="wrap cap-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1517502166878-35c93a0072f0?auto=format&fit=crop&w=700&q=75" alt="white clothes hangers hanging on a minimal rail" width="700" height="933" loading="lazy"></div>
    <div>
      <span class="idx"><b>04</b>Capsule checklist</span>
      <h2 id="cp-t">Ten pieces, endless outfits</h2>
      <p class="muted">A capsule wardrobe is a small collection of versatile pieces that all work together. Tick off what you already own to see what, if anything, is missing. Your ticks are saved only in this browser.</p>
      <div class="progress"><i id="cap-bar"></i></div>
      <p class="prog-label" id="cap-label">0 of 10 pieces in your wardrobe</p>
      <ul class="pieces"><li><label><input type="checkbox"><span class="n">01</span><span><strong>The crisp white shirt</strong><small>Cambric or poplin, with a collar that holds its shape.</small></span></label></li><li><label><input type="checkbox"><span class="n">02</span><span><strong>A soft blouse</strong><small>Lawn or batiste, for warm days and layering under knits.</small></span></label></li><li><label><input type="checkbox"><span class="n">03</span><span><strong>Straight-leg trousers</strong><small>Cotton twill or linen blend in a neutral tone.</small></span></label></li><li><label><input type="checkbox"><span class="n">04</span><span><strong>A shirt dress</strong><small>Belted or loose, it works from office to weekend.</small></span></label></li><li><label><input type="checkbox"><span class="n">05</span><span><strong>A fine-gauge knit</strong><small>Cotton or merino to layer over shirts in cooler weather.</small></span></label></li><li><label><input type="checkbox"><span class="n">06</span><span><strong>A cotton skirt</strong><small>A-line or slip-style in a light, breathable weave.</small></span></label></li><li><label><input type="checkbox"><span class="n">07</span><span><strong>A chambray overshirt</strong><small>Worn open as a light jacket or buttoned as a top.</small></span></label></li><li><label><input type="checkbox"><span class="n">08</span><span><strong>Cotton sleepwear</strong><small>Cambric or lawn pyjamas: cool, soft and breathable.</small></span></label></li><li><label><input type="checkbox"><span class="n">09</span><span><strong>A light trench or jacket</strong><small>Cotton gabardine or canvas for changeable days.</small></span></label></li><li><label><input type="checkbox"><span class="n">10</span><span><strong>Simple leather shoes</strong><small>Loafers, sandals or trainers that go with everything.</small></span></label></li></ul>
    </div>
  </div>
</section>

<section class="look" aria-labelledby="lk-t">
  <div class="wrap">
    <span class="idx"><b>05</b>Lookbook</span>
    <h2 id="lk-t" style="margin-bottom:36px">White, worn five ways</h2>
    <div class="look-grid">
      <figure><img src="https://images.unsplash.com/photo-1589465885857-44edb59bbff2?auto=format&fit=crop&w=800&q=75" alt="woman in a white long-sleeve shirt and white trousers" width="800" height="1100" loading="lazy"><figcaption>Tonal white</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1760552070057-db7adfeddc39?auto=format&fit=crop&w=600&q=75" alt="young woman in a white shirt and jeans outdoors" width="600" height="520" loading="lazy"><figcaption>Shirt &amp; denim</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=600&q=75" alt="smiling woman in a white and black pinstriped collared top" width="600" height="520" loading="lazy"><figcaption>Pinstripe</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1599309329365-0a9ed45a1da3?auto=format&fit=crop&w=900&q=75" alt="woman in a white sleeveless dress and straw hat among green trees" width="900" height="520" loading="lazy"><figcaption>Summer dress</figcaption></figure>
      <figure><img src="https://images.unsplash.com/photo-1778826971124-c5ee892e266e?auto=format&fit=crop&w=600&q=75" alt="young woman adjusting a white ruffled shirt" width="600" height="520" loading="lazy"><figcaption>Soft ruffle</figcaption></figure>
    </div>
  </div>
</section>

<section class="iron" aria-labelledby="ir-t">
  <div class="wrap iron-grid">
    <div>
      <span class="idx"><b>06</b>Pressing guide</span>
      <h2 id="ir-t">The right heat for every fabric</h2>
      <p>Most damage to fine cotton happens at the ironing board. Match the heat to the fabric, press while slightly damp and work from collar to hem.</p>
      <div class="tbl-wrap"><table class="tbl"><thead><tr><th>Fabric</th><th>Iron setting</th><th>Tip</th></tr></thead><tbody>
        <tr><td>Cambric &amp; poplin</td><td class="dots"><i></i><i></i><i></i></td><td>Press damp for a crisp finish</td></tr>
        <tr><td>Lawn &amp; batiste</td><td class="dots"><i></i><i></i></td><td>Use a pressing cloth</td></tr>
        <tr><td>Voile</td><td class="dots"><i></i><i></i></td><td>Steam rather than press</td></tr>
        <tr><td>Chambray</td><td class="dots"><i></i><i></i><i></i></td><td>Iron inside out to protect colour</td></tr>
        <tr><td>Linen</td><td class="dots"><i></i><i></i><i></i></td><td>Iron very damp; embrace softness</td></tr>
      </tbody></table></div>
      <p style="font-size:.85rem;margin-top:14px;opacity:.8">One dot is a cool setting, three is hot. Always check your garment&#8217;s care label first.</p>
    </div>
    <div class="pic"><img src="https://images.unsplash.com/photo-1714321960831-c8753b534400?auto=format&fit=crop&w=800&q=75" alt="person ironing a white shirt with a black iron" width="800" height="680" loading="lazy"></div>
  </div>
</section>

<section class="princ" aria-labelledby="pr-t">
  <div class="wrap princ-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1673551727871-951292d16bef?auto=format&fit=crop&w=700&q=75" alt="hands holding a piece of cloth embroidered with flowers" width="700" height="875" loading="lazy"></div>
    <div>
      <span class="idx"><b>07</b>Utopia principles</span>
      <h2 id="pr-t">Six ideas for a better wardrobe</h2>
      <div class="plist">
        <div><span class="n">i</span><h3>Fabric first</h3><p>Look at the label before the price tag. Natural, breathable fibres usually feel better and last longer.</p></div>
        <div><span class="n">ii</span><h3>Fewer, better</h3><p>A few well-made pieces you love will be worn far more than a full rail of compromises.</p></div>
        <div><span class="n">iii</span><h3>Wash gently</h3><p>Cooler washes and air drying protect fibres and colour and use less energy.</p></div>
        <div><span class="n">iv</span><h3>Mend early</h3><p>Re-sew a loose button today and you won&#8217;t lose it tomorrow.</p></div>
        <div><span class="n">v</span><h3>Wear it often</h3><p>The most sustainable garment is the one you already own and actually use.</p></div>
        <div><span class="n">vi</span><h3>Pass it on</h3><p>Clothes you no longer wear can be swapped, donated or resold for someone else to enjoy.</p></div>
      </div>
    </div>
  </div>
</section>

<section class="fit" aria-labelledby="fi-t">
  <div class="wrap">
    <span class="idx"><b>08</b>Shirt fit</span>
    <h2 id="fi-t" style="margin-bottom:36px">How a good shirt should fit</h2>
    <div class="fit-grid">
      <div class="pic"><img src="https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?auto=format&fit=crop&w=700&q=75" alt="white button-up shirt laid on a wooden table" width="700" height="600" loading="lazy"></div>
      <div class="card"><h3>Five checkpoints</h3><ul>
        <li><strong>Collar:</strong> one finger fits comfortably inside when buttoned.</li>
        <li><strong>Shoulders:</strong> the seam sits on the edge of your shoulder bone.</li>
        <li><strong>Chest:</strong> buttons lie flat with no pulling when you move your arms.</li>
        <li><strong>Sleeves:</strong> cuffs reach the base of your thumb with arms relaxed.</li>
        <li><strong>Length:</strong> long enough to stay tucked when you raise your arms.</li>
      </ul></div>
      <div class="pic"><img src="https://images.unsplash.com/photo-1523901839036-a3030662f220?auto=format&fit=crop&w=700&q=75" alt="tape measure in selective focus" width="700" height="600" loading="lazy"></div>
    </div>
  </div>
</section>

<section class="pal" aria-labelledby="pa-t">
  <div class="wrap pal-grid">
    <div class="pic"><img src="https://images.unsplash.com/photo-1713881587420-113c1c43e28a?auto=format&fit=crop&w=700&q=75" alt="white shirt hanging on a clothes line" width="700" height="875" loading="lazy"></div>
    <div>
      <span class="idx"><b>09</b>A cotton palette</span>
      <h2 id="pa-t">Not all whites are equal</h2>
      <p class="muted">Pure white flatters some people more than others. These softer shades are easy to mix and forgiving on many skin tones.</p>
      <p><strong>This season:</strong> <?php echo htmlspecialchars($note, ENT_QUOTES, 'UTF-8'); ?></p>
      <div class="chips">
        <div class="chip"><i style="background:#FFFFFF;border-bottom:1px solid #E1E3E6"></i><span><b>Optic white</b>Crisp and bright</span></div>
        <div class="chip"><i style="background:#F6F1E6"></i><span><b>Ecru</b>Natural, unbleached</span></div>
        <div class="chip"><i style="background:#EFE7DA"></i><span><b>Oat</b>Warm and soft</span></div>
        <div class="chip"><i style="background:#DCE8EF"></i><span><b>Shirting blue</b>Classic and calm</span></div>
        <div class="chip"><i style="background:#F1D6CF"></i><span><b>Blush</b>Gentle warmth</span></div>
        <div class="chip"><i style="background:#C9D3C0"></i><span><b>Sage</b>Muted and fresh</span></div>
      </div>
    </div>
  </div>
</section>

<section class="faq" aria-labelledby="fq-t">
  <div class="wrap faq-grid">
    <div><span class="idx"><b>10</b>Questions</span><h2 id="fq-t">Things readers ask</h2><p class="muted">Can&#8217;t find your answer? We are happy to help.</p><a class="btn btn--l" href="contact.html">Write to us</a><div class="pic"><img src="https://images.unsplash.com/photo-1602810316693-3667c854239a?auto=format&fit=crop&w=800&q=75" alt="blue button-up shirt on a white table" width="800" height="600" loading="lazy"></div></div>
    <div><details open><summary>What is cambric fabric?</summary><p>Cambric is a fine, closely woven plain-weave fabric, originally made from linen and now most often from cotton. After weaving it is usually calendered, pressed between heated rollers, which gives it a smooth surface and a gentle sheen.</p></details><details><summary>Where does the name come from?</summary><p>The word comes from Cambrai, a town in northern France that was famous for weaving fine linen cloth. In French the fabric is called batiste, a name now often used for a related, softer weave.</p></details><details><summary>Is cambric good for summer?</summary><p>Yes. Cambric is lightweight, breathable and absorbent, so it feels comfortable in warm weather. Its dense weave also means it is less sheer than voile or some lawns.</p></details><details><summary>How do I keep white cotton bright?</summary><p>Wash whites separately in cool or warm water, avoid overloading the machine, and dry in fresh air when possible. Treat stains quickly and avoid excessive bleach, which can weaken cotton fibres over time.</p></details><details><summary>Does cambric wrinkle?</summary><p>Like most fine cottons it can crease, but it irons easily to a crisp finish. Hanging shirts as soon as the wash cycle ends reduces wrinkles considerably.</p></details><details><summary>Does Cambric Utopia sell clothing?</summary><p>No. We are an independent fashion guide. We do not sell clothing and are not affiliated with any brand or retailer.</p></details></div>
  </div>
</section>

<section class="letter" id="letter" aria-labelledby="lt-t">
  <div class="pic"><img src="https://images.unsplash.com/photo-1651047582263-71fe3ee629f6?auto=format&fit=crop&w=1000&q=75" alt="woman wearing a flowing white dress" width="1000" height="1200" loading="lazy"></div>
  <div class="in">
    <span class="idx"><b>11</b>Monthly</span>
    <h2 id="lt-t">The Utopia Letter</h2>
    <p class="muted">One thoughtful email a month: a fabric explained, a styling idea and a seasonal care reminder. No promotions, ever.</p>
    <?php if ($msg): ?><p class="<?php echo $ok ? 'ok' : 'err'; ?>" role="status"><?php echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); ?></p><?php endif; ?>
    <form method="post" action="index.php#letter">
      <label for="le" class="skip">Email address</label>
      <input type="email" id="le" name="letter_email" placeholder="Your email address" required autocomplete="email">
      <input type="text" name="website" tabindex="-1" autocomplete="off" style="display:none" aria-hidden="true">
      <button class="btn" type="submit">Subscribe</button>
    </form>
    <p class="small">Read our <a href="privacy-policy.html">Privacy Policy</a>. Unsubscribe any time.</p>
  </div>
</section>
</main>
<footer class="ftr">
  <div class="wrap">
    <div class="big">Cambric <i>Utopia</i></div>
    <div class="ftr-grid">
      <div><h4>The idea</h4><p>An independent guide to fine cotton fashion: the fabrics, the fit and the quiet habits behind a light, lasting wardrobe.</p></div>
      <div><h4>Read</h4><a href="fabric-guide.html">Fabric Guide</a><a href="style-guide.html">Style Guide</a><a href="index.php#capsule">Capsule Checklist</a><a href="about.html">About</a><a href="contact.html">Contact</a></div>
      <div><h4>Policies</h4><a href="privacy-policy.html">Privacy Policy</a><a href="terms-and-conditions.html">Terms &amp; Conditions</a><a href="cookie-policy.html">Cookie Policy</a><a href="disclaimer.html">Disclaimer</a><a href="editorial-policy.html">Editorial Policy</a></div>
      <div><h4>Studio</h4><p>181 Mercer Street, New York, NY 10012, United States</p><a href="tel:+18887775845">+1-888-777-5845</a><a href="mailto:hello@cambricutopia.com">hello@cambricutopia.com</a></div>
    </div>
    <div class="ftr-base"><span>&copy; <?php echo date("Y"); ?> Cambric Utopia. All rights reserved.</span><span>Photography from Unsplash, used under the Unsplash License.</span></div>
  </div>
</footer>
<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice"><p>We use essential cookies and, with your permission, analytics cookies to improve our guides. <a href="cookie-policy.html">Cookie Policy</a></p><button class="y" data-cookie="accepted">Accept</button><button data-cookie="declined">Essential only</button></div>
<script src="assets/js/main.js" defer></script>
</body>
</html>
