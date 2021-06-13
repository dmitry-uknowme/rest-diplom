const inputCount = document.querySelector('.count__input');
const countNumber = document.querySelector('.count__number');
const list = document.querySelector('.ingridient-list');
const ingridientItems = document.querySelectorAll('.ingridient-item');
const ingridientPrices = document.querySelectorAll('.ingridient-price');
const ingridientTotalPrice = document.querySelector('.ingridient-price-total');

inputCount.oninput = (e) => {
	const value = parseInt(e.target.value);
	countNumber.innerHTML = value;
	Array.from(ingridientItems).map((ingridient) => {
		const weight = parseInt(ingridient.dataset['weight']);
		ingridient.children[0].innerText = weight * value;
	});
	let sum = 0;
	Array.from(ingridientPrices).map((ingridient, id) => {
		const price = parseFloat(ingridient.dataset['price']);
		const weight = parseInt(ingridientItems[id].children[0].innerText);
		ingridient.children[0].innerText = `${(price * weight).toFixed(0)} руб.`;
		sum += price * weight;
	});
	ingridientTotalPrice.innerText = `Всего: ${sum.toFixed(0)} руб.`;
};
