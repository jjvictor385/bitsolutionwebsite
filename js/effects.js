function getEl(s, all = false){
	let f = document.querySelector;
	if (all) {
		f = document.querySelectorAll;
	}
	return f.call(document, s);
}
function addEvent(e, ev, c){
	if (window.addEventListener) {
		e.addEventListener(ev, c, false);
	} else {
		e.attachEvent('on'+ev, c);
	}
}
function handleClass(obj, cls, action = 'a'){
	cls = cls.split(' ');
	let f = obj.classList.add;
	if (action != 'a') {
		f = obj.classList.remove;
	}
	for (let c of cls) {
		f.call(obj.classList, c);
	}
	return obj;
}
function attr(e, k, v){
	if (v == undefined) {
		return e[k];
	}
	e[k] = v;
}
function setStyles(e, k, v){
	e.style[k] = v;
}
function toggleMenuMobile(trigger, menu){
	let t = getEl(trigger),
		m = getEl(menu);
	addEvent(t, 'change', function (e){
		if (this.checked) {
			handleClass(m, 'open');
			handleClass(this.parentElement, 'black');
			setStyles(document.body, 'overflow-y', 'hidden');
		} else {
			handleClass(m, 'open', 'r');
			handleClass(this.parentElement, 'black', 'r');
			setStyles(document.body, 'overflow-y', 'scroll');
		}
	});
}
var fade = (e, display = 'block', a = 'o') => {
	e = getEl(e);
	let open = () => {
		setStyles(e, 'display', display);
		setStyles(e, 'transition', 'opacity 0.3s ease');
		setStyles(e, 'opacity', 0);
		setTimeout(() => {
			setStyles(e, 'opacity', 1);
		}, 500);
	};
	let close = () => {
		setStyles(e, 'opacity', 0);
		setTimeout(() => {
			setStyles(e, 'display', 'none');
			e.removeAttribute('style');
		}, 500);
	};
	let choose = open;
	if (a != 'o')
		choose = close;
	choose();
};
function getModal(closer){
	const m = getEl('.gallery_'),
		s = getEl('#setter');
	closer = getEl(closer);
	var triggers = getEl('#image-trigger', true);
	for (let t of triggers) {
		addEvent(t, 'click', function (e){
			fade('.gallery_');
			s.src = this.src;
		});
		addEvent(closer, 'click', function (e){
			fade('.gallery_', null, 'c');
			e.preventDefault();
		});
	}
}
function raiseWarn(s = '.warn'){
	s = getEl(s);
	let closer = s.childNodes[3].childNodes[1];
	let open = () => {
		setStyles(s, 'display', 'block');
		setTimeout(() => {
			handleClass(s, 'open');
		}, 100);
	};
	let close = () => {
		handleClass(s, 'open', 'r');
		setTimeout(() => {
			setStyles(s, 'display', 'none');
		}, 100);
	};
	open();
	closer.addEventListener('click', close);
}
function resize(s){
	s = getEl(s);
	s.addEventListener('input', function (){
		this.style.height = 'auto';
		this.style.height = (this.scrollHeight - 13) + 'px';
	});
}
function loadInputs(s){
	s = getEl(s, true);
	s.forEach(i => {
		i.addEventListener('focus', function (){
			handleClass(this.parentElement, 'open active');
		});
		i.addEventListener('blur', function (){
			if (this.value.length == 0)
				handleClass(this.parentElement, 'open active', 'r');
			else
				handleClass(this.parentElement, 'active', 'r');
		});
	});
}
function getChilds(s){
	let e = typeof s === "object" ? s : getEl(e),
		c = e.childNodes,
		r = [];
	for (let x of c) {
		if (x.constructor.name != 'Text')
			r.push(x);
	}
	return r;
}
var getLocation = sel => {
	let s = window.location.href.split('/');
	sel = getEl(sel);
	s = s.slice(2, s.length);
	s[0] = 'Homepage';
	s[s.length - 1] = document.title;
	sel.innerHTML = s.join('<i class="material-icons">keyboard_arrow_right</i>');
};
var activeChangers = (s) => {
	s = getEl(s, true);
	s.forEach(i => {
		let triggers = i.childNodes[3].childNodes,
			label = i.childNodes[1].childNodes[1];
		for (let trigger of triggers) {
			trigger.addEventListener('click', function (){
				let c = this.getAttribute('data-changer');
				label.innerHTML = c;
			});
		}
	});
};
// (function(){
// 	if (!localStorage.getItem('warned-req')) {
// 		raiseWarn();
// 		localStorage.setItem('warned-req', true);
// 	}
// })();
getModal('#closer');