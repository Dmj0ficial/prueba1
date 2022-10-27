/**
 * NO EDITES ESTE ARCHIVO, NO ES PARTE DE LA PRUEBA.
 */

const content = {};

content.title = `Our Pets`;
content.content1 = `<h2>Dachshund</h2>
<p>
Also known as the wiener dog, badger dog, or sausage dog, is a short-legged,
long-bodied, hound-type dog breed. They may be smooth, wire, or long-haired.
</p>
<p>
The standard-sized dachshund was developed to scent, chase, and flush out
badgers and other burrow-dwelling animals, while the miniature dachshund was
bred to hunt small animals such as rabbits and mice.
</p>`;
content.content2 = `<h2>Corgi</h2>
<p>
The Welsh Corgi or Corgi, plural Corgis, is a small type of herding dog that
originated in Wales.
</p>
<p>
Two separate breeds are recognised: the Pembroke Welsh Corgi and the Cardigan
Welsh Corgi.
</p>
<p>
Overall the Cardigan is larger, both in weight and in height.
Their tails are of different shapes.
</p>`;
content.content3 = `<h2>Mongrel</h2>
<p>
A mongrel, mutt or mixed-breed dog is a dog that does not belong to one
officially recognized breed and is not the result of intentional breeding.
</p>
<p>
Although mongrels are viewed as of less commercial value than intentionally
bred dogs, they are thought to be less susceptible to genetic health problems
associated with inbreeding.
</p>`;
content.navlinks = `
  <ul>
    <li><a href="#">Adopt</a></li>
    <li class="active"><a href="#">Our Pets</a></li>
    <li><a href="#">Logout</a></li>
  </ul>`;

// Emulate a mini template engine:
document.addEventListener('DOMContentLoaded', () => {
  let html = document.body.innerHTML;
  Object.entries(content).forEach(([tag, data]) => {
    html = html.replaceAll(`{${tag}}`, data);
  });
  document.body.innerHTML = html;
});
