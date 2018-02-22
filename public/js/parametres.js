
debugger;

jQuery(function($)
{
	$('#formparametre').validator({
	custom:
	{
		passe: function($el)
		{
			var mpass1=$($el.data('passe')).val()!='';
		if ($el.val()!='' &&  $($el.data('passe')).val()!='')
			{
				if ($el.val()!=$($el.data('passe')).val())		
				{
					return 'La confirmation doit être égale au mot de passe';
				}
			}
			else{
				if ($el.val()=='' &&  $($el.data('passe')).val()=='')
				{
				}
				else
				{
				return 'La confirmation doit être égale au mot de passe';
				}
			}
		},
		naissance: function($el)
		{
			var dnai=new Date();
			dnai.setFullYear($el.val().substring(0,4),$el.val().substring(5,7)-1,$el.val().substring(8,10));
			var currdate = new Date();   
			currdate.setFullYear(currdate.getFullYear() - 18); 
			if (currdate - dnai < 0)
			{
				return 'Vous devez avoir au moins 18 ans pour adhérer à SeecretSpot';
			}
		}

		
	}
	});


});

