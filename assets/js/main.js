(function(){
  var b=document.querySelector('.burger'),n=document.getElementById('nav');
  if(b&&n)b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o?'true':'false');});
  // Weave explorer
  var W={
    cambric:['Cambric','A fine, dense plain weave, traditionally linen and now usually cotton, calendered (pressed between rollers) for a soft sheen.','Smooth, crisp, slightly glossy','Shirts, blouses, nightwear, handkerchiefs, linings'],
    lawn:['Lawn','A very fine, lightweight plain weave made from high thread-count yarns, with a silky, airy hand.','Light, silky, semi-crisp','Summer blouses, dresses, printed shirts'],
    voile:['Voile','A sheer, open plain weave made from tightly twisted yarns, so it feels crisp and cool.','Sheer, airy, crisp','Layered tops, summer dress overlays, scarves'],
    poplin:['Poplin','A plain weave with a fine horizontal rib, created by using finer warp threads than weft threads.','Smooth, structured, durable','Dress shirts, shirt dresses, trousers'],
    batiste:['Batiste','An extremely soft, lightweight plain weave, often slightly sheer, with a gentle drape.','Soft, delicate, floaty','Heirloom blouses, christening gowns, lingerie, linings'],
    chambray:['Chambray','A plain weave with a coloured warp and white weft, giving a soft, heathered denim-like look in a lighter fabric.','Soft, casual, slightly textured','Casual shirts, summer dresses, workwear']
  };
  var box=document.getElementById('wdetail');
  document.querySelectorAll('.sw').forEach(function(s){s.addEventListener('click',function(){
    document.querySelectorAll('.sw').forEach(function(x){x.setAttribute('aria-pressed','false');});
    s.setAttribute('aria-pressed','true');var w=W[s.dataset.w];
    box.querySelector('.big').className='big t-'+s.dataset.w;
    box.querySelector('h3').textContent=w[0];box.querySelector('[data-k="d"]').textContent=w[1];
    box.querySelector('[data-k="f"]').textContent=w[2];box.querySelector('[data-k="u"]').textContent=w[3];
  });});
  // Capsule checklist (remembered in this browser only)
  var boxes=document.querySelectorAll('.pieces input'),bar=document.getElementById('cap-bar'),lab=document.getElementById('cap-label');
  function upd(){var c=0;boxes.forEach(function(x){if(x.checked)c++;});if(bar)bar.style.width=(c/boxes.length*100)+'%';if(lab)lab.textContent=c+' of '+boxes.length+' pieces in your wardrobe';
    try{localStorage.setItem('cu_capsule',JSON.stringify(Array.prototype.map.call(boxes,function(x){return x.checked;})));}catch(e){}}
  try{var saved=JSON.parse(localStorage.getItem('cu_capsule')||'[]');boxes.forEach(function(x,i){x.checked=!!saved[i];});}catch(e){}
  boxes.forEach(function(x){x.addEventListener('change',upd);});if(boxes.length)upd();
  // Cookie
  var k=document.getElementById('cookie'),v=null;try{v=localStorage.getItem('cu_cookie');}catch(e){}
  if(k&&!v)k.classList.add('show');
  document.querySelectorAll('[data-cookie]').forEach(function(x){x.addEventListener('click',function(){try{localStorage.setItem('cu_cookie',x.dataset.cookie);}catch(e){}k.classList.remove('show');});});
  var y=document.getElementById('year');if(y)y.textContent=new Date().getFullYear();
})();
