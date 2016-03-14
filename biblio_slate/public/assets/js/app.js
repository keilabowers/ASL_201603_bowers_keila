/*	Keila Bowers
	ASL 201603
	Biblio Slate JS
*/ 

//Javascript call to enable bootstrap tabs
$('#myTabs a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
})
