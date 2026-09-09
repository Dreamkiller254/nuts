(() => {
  const names = ['Origin to Export', 'Processing Confidence', 'Rooted in Africa', 'The Origin Edit', 'The Select Standard', 'Beyond Borders'];
  const concept = Number(document.body.dataset.concept);
  const dialog = document.createElement('dialog');
  dialog.className = 'np-dialog';
  dialog.id = 'enquiry';
  dialog.setAttribute('aria-labelledby', 'enquiry-title');
  dialog.innerHTML = `<button class="np-close" type="button" aria-label="Close enquiry">×</button><div class="np-label">Nuts Paradise · Buyer enquiries</div><h2 id="enquiry-title">Let's talk about<br>your next shipment.</h2><p>Tell us what you need. Start with the product, volume and destination, and build your buyer enquiry.</p><form><div class="form-grid"><label>Full name<input name="Full name" autocomplete="name" required></label><label>Company name<input name="Company" autocomplete="organization" required></label><label>Business email<input name="Business email" type="email" autocomplete="email" required></label><label>Country<input name="Country" autocomplete="country-name" required></label><label>Product interest<select name="Product"><option>Macadamias</option><option>Cashews</option><option>Both</option></select></label><label>Estimated volume<input name="Volume" placeholder="e.g. 10 MT per month" required></label><label class="full">Destination market<input name="Destination market" required></label><label class="full">Anything else we should know?<textarea name="Message" placeholder="Specifications, timing or other requirements"></textarea></label></div><button class="np-button" type="submit">Save enquiry brief <span aria-hidden="true">↗</span></button><p class="form-note">Design preview: this saves your enquiry to your device. No information is sent.</p><p class="form-status" role="status" aria-live="polite"></p></form>`;
  document.body.append(dialog);
  dialog.querySelector('.np-close').addEventListener('click', () => dialog.close());
  dialog.addEventListener('click', e => { if(e.target === dialog && (e.clientX < dialog.getBoundingClientRect().left || e.clientX > dialog.getBoundingClientRect().right || e.clientY < dialog.getBoundingClientRect().top || e.clientY > dialog.getBoundingClientRect().bottom)) dialog.close(); });
  document.querySelectorAll('[data-enquiry]').forEach(link => link.addEventListener('click', event => {event.preventDefault(); dialog.querySelector('.form-status').textContent = ''; const product = link.dataset.product; if(product) dialog.querySelector('select').value = product; dialog.showModal();}));
  dialog.querySelector('form').addEventListener('submit', event => {
    event.preventDefault();
    const details = [...new FormData(event.target)].map(([key,value]) => `${key}: ${value}`).join('\n\n');
    const blob = new Blob([`NUTS PARADISE — BUYER ENQUIRY\n\n${details}\n\nPrepared locally. This enquiry has not been sent.\n`], {type:'text/plain;charset=utf-8'});
    const url = URL.createObjectURL(blob), a = document.createElement('a'); a.href=url; a.download='nuts-paradise-enquiry.txt'; a.click(); setTimeout(() => URL.revokeObjectURL(url), 1000);
    dialog.querySelector('.form-status').textContent = 'Your enquiry brief is ready to share. Nothing has been sent.';
  });
  if (concept) {
    const switcher = document.createElement('nav'); switcher.className='concept-switcher'; switcher.setAttribute('aria-label','Compare design concepts');
    switcher.innerHTML = `<a class="concept-home" href="index.html" aria-label="View all six designs">▦ <span>Designs</span></a>` + names.map((name,i) => `<a href="${i+1}.html" aria-label="Concept ${i+1}: ${name}" ${concept===i+1?'aria-current="page"':''}>${i+1}</a>`).join('') + `<span class="concept-title">${names[concept-1]}</span>`;
    document.body.append(switcher);
  }
  const menuToggle=document.querySelector('.np-menu-toggle');
  if(menuToggle){
    const menu=document.createElement('dialog');menu.className='np-mobile-menu';menu.id='mobile-menu';menu.setAttribute('aria-label','Navigation');
    menu.innerHTML='<button class="np-close" type="button" aria-label="Close menu">×</button><small>NUTS PARADISE</small><nav><a href="#about">Our company</a><a href="#products">Our products</a><a href="#processing">Processing</a><a href="#quality">Quality & certification</a><a href="#enquiry" class="mobile-enquiry">Request a Quote ↗</a></nav><small>Mbombela, South Africa · Global supply</small>';
    document.body.append(menu);menuToggle.setAttribute('aria-controls',menu.id);menuToggle.setAttribute('aria-expanded','false');
    menuToggle.addEventListener('click',()=>{menu.showModal();menuToggle.setAttribute('aria-expanded','true')});
    menu.addEventListener('close',()=>menuToggle.setAttribute('aria-expanded','false'));
    menu.querySelector('.np-close').addEventListener('click',()=>menu.close());
    menu.querySelectorAll('a').forEach(a=>a.addEventListener('click',e=>{menu.close();if(a.classList.contains('mobile-enquiry')){e.preventDefault();dialog.showModal()}}));
  }
  if('IntersectionObserver' in window && !matchMedia('(prefers-reduced-motion: reduce)').matches){
    const observer=new IntersectionObserver(entries=>entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.remove('pending');observer.unobserve(entry.target)}}),{threshold:.08});
    document.documentElement.classList.add('motion-ready');document.querySelectorAll('.reveal').forEach(el=>{el.classList.add('pending');observer.observe(el)});
  }
})();
