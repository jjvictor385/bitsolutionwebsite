function wavesEffect(e){
	var w = this.clientWidth > this.clientHeight ? this.clientWidth * 2 : this.clientHeight * 2,
		r = w / 2,
		x = e.layerX,
		y = e.layerY;
	var wave = document.createElement('div');
	wave.classList.add('wave');
	wave.style.width = w + 'px';
	wave.style.height = w + 'px';
	wave.style.top = y - r + 'px';
	wave.style.left = x - r + 'px';
	this.appendChild(wave);
	var removeEffect = e => {
		setTimeout(() => {
			wave.style.opacity = 0;	
			setTimeout(() => {
				wave.remove();
			}, 100);
		}, 100);
	};
	this.addEventListener('mouseup', removeEffect);
	this.addEventListener('mouseout', removeEffect);
}
var els = document.querySelectorAll('.waves');
for (let e of els) {
	e.addEventListener('mousedown', wavesEffect);
}