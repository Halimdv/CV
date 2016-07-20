$(function(){
	$('.avatar').on('transitionend', function(e){

	});
	words = ["Développeur web", "Intégrateur web", "Kikoolol"];
	index = 0;
	longueur = words.length;

	$('small').html('');
	
	deletechar = '';
	addchar= ''; 
	function addLetter(pos){
		word = words[pos];
		addchar = setInterval(function(){

			if(i < word.length){
				$('small').append(word[i]);
				i++;
			} else {
				clearInterval(addchar);
			}
		}, 1000 / words[index % longueur].length);
	}
	
	/*function deleteString(){
		//setTimeout(function(){

			deletechar = setInterval(function(){
				chain = $('small').text();
				if (chain != ''){
					$('small').html(chain.substring(0,chain.length-1));
				} else {
				clearInterval(deleteString);
				//addLetter
			}
			}, 1000 / words[index % longueur].length);
			
		// }, 200*(word.length+2));
	}*/

	function rewriteSmall(text){
		var del = true;
		i = 0;
		var duration = $('small').text().length;
		rewrite = setInterval(function(){
			chain = $('small').text();
			if(del == true && chain != ''){
				$('small').html(chain.substring(0,chain.length-1));
			} else if(del == true && chain == ''){
				del = false;
				length = text.length;
			} else if(del == false && chain != text){
				$('small').append(text[i]);
				i++;
			} else {
				clearInterval(rewrite);
			}

		}, 1000 / duration);
	}

	setTimeout(function(){
		i = 0;
		addLetter(0);

	}, 180);

	setInterval(function(){
		index++
		i = 0;
		chain = $('small').text();
		clearInterval(addchar);
		console.log("activé");
		pos = index % longueur;
		rewriteSmall(words[pos]);
	}, 8000);

	$('.skill').knob({
		"readOnly": true,
	});

	/*dialValue = 58;
	dialActualValue = 0;
	dialknob = setInterval(function(){
		if(dialActualValue <= dialValue){
			$('.dial').val(dialActualValue).trigger('change');
			dialActualValue++;
		} else {
			clearInterval(dialknob);
		}
	}, 1000/ dialValue);*/
$('.skill').each(function(){
	var skill = $(this);
	$({value: 0}).animate({value: $(this).attr('data-value')}, {
		duration: 1000,
		easing: 'swing',
		step: function(){
			skill.val(this.value).trigger('change');
	}
})

})

	
});