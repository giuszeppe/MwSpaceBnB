document.getElementById('add_btn').onclick = function(){
	event.preventDefault();
	var count = $('#servizi_aggiuntivi > input').length;

	let list = document.getElementById('servizi_aggiuntivi');
	let node = document.createElement('INPUT');
	let wrapper = document.createElement('span');
	let delete_btn = document.createElement('button');
	let list_item = document.createElement('Li');



	let text = document.getElementById('servizio').value;
	let textnode = document.createTextNode(text);

	
	list_item.textContent = text;
	wrapper.setAttribute('id', 'servizio' + count);

	delete_btn.setAttribute('name','servizio' + count);
	delete_btn.innerHTML = '<i class="fa fa-times" aria-hidden="true"></i>';

	delete_btn.onclick= function () {
		event.preventDefault();
		let name = delete_btn.name;
		let elems = document.getElementById('servizi_aggiuntivi').children;
		console.log(elems)
		for(elems of elem){

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