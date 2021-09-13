buildElement = function (count,text) {
	let wrapper = document.createElement('span');
	wrapper.setAttribute('class','span-services');
	let list = document.getElementById('servizi_aggiuntivi');
	let textnode = document.createTextNode(text);
	let node = document.createElement('INPUT');
	let delete_btn = document.createElement('button');
	let list_item = document.createElement('Li');
	
	list_item.textContent = text;

	wrapper.setAttribute('id', 'servizio' + count);

	delete_btn.setAttribute('name','servizio' + count);
	delete_btn.setAttribute('class','btn btn-danger btn-sm mt-2 mb-2 ml-3');
	delete_btn.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';

	delete_btn.onclick= function () {
		event.preventDefault();
		let count = 0;
		let list = document.getElementById('servizi_aggiuntivi')
		let name = delete_btn.name;
		let elems = list.cloneNode(true).children;
		console.log(elems)
		list.innerHTML = "";

		console.log(elems)
		for(elem of elems){
			if(elem.id == name){
				continue;
			} else {
				buildElement(count,elem.children[0].textContent);
				count++;
			}
		}
	}

	wrapper.appendChild(list_item);
	wrapper.appendChild(delete_btn);


	node.setAttribute('type','checkbox');
	node.setAttribute('name','servizi[' + count + ']');
	node.setAttribute('style','display:none');
	node.appendChild(textnode);

	wrapper.appendChild(node);
	list.append(wrapper);
} 

document.getElementById('add_btn').onclick = function(){
	event.preventDefault();
	var count = $('#servizi_aggiuntivi > span').length;
	let text = document.getElementById('servizio').value;
	buildElement(count, text);

}