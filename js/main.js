
const inputCount = document.querySelector('.count__input');
const countNumber = document.querySelector('.count__number');
const list = document.querySelector('.ingridient-list');
const array = list.innerText.split(' ');
const ingridientPrice = document.querySelectorAll('.ingridient-price')
const ingridientTotalPrice = document.querySelector('.ingridient-price-total')

let nums = [];
const regex = /\d+/g;

array.map((a, id) => {
	if (a.match(regex)) {
		nums.push(parseInt(a));
	}
});

console.log(nums);

console.log('sosi jopu')


inputCount.oninput = (e) => {
	const value = parseInt(e.target.value);
	
	countNumber.innerHTML = value;
	list.innerText.match(regex).map((n, id) => {
		list.innerText = list.innerText.replace(n, nums[id] * value);
		Array.from(ingridientPrice).map((price,id)=>{
			let sum = 0
			const startPrice = parseFloat(price.dataset['price'])
			// console.log(startPrice, parseInt(n), startPrice * parseInt(n))
			price.innerText = (startPrice * parseInt(n) * 10).toFixed(0)
			sum += (startPrice * parseInt(n) * 10).toFixed(0)
			console.log(ingridientTotalPrice)
			ingridientTotalPrice.innerText = `Всего: ${sum}`
		})
	});
	
};inputCount.onchange = (e) => {
	const value = parseInt(e.target.value);
	
	countNumber.innerHTML = value;
	list.innerText.match(regex).map((n, id) => {
		list.innerText = list.innerText.replace(n, nums[id] * value);
		Array.from(ingridientPrice).map((price,id)=>{
			const startPrice = parseFloat(price.dataset['price'])
			console.log(startPrice, parseInt(n), startPrice * parseInt(n))
			price.innerText = startPrice * parseInt(n)
		})
	});
};
