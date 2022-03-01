window.addEventListener('DOMContentLoaded',setup);
function setup(){	
	const options = {

			rootMargin: '0px 0px -200px 0px'
	}
	const observer = new IntersectionObserver(()=>{},options)
}
