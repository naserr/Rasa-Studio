		window.onload = function(){
		document.body.className = '';
		var myform = document.forms.item(0);
		
		for (var i=0;i<myform.elements.length;i++){
			var inp = myform.elements.item(i);
			if (inp.type=='submit'){
				continue;
			}
			
			inp.onfocus = function(){
				if (this.value == this.defaultValue){
					this.value = '';
				}
			}
	
			inp.onblur = function(){
				
				if (this.value == ''){
					this.value = this.defaultValue;
					this.style.color='red';
				}else{
					this.style.color="lightgreen";
				}
			}
		}
	}
