
//Javascript call to enable bootstrap tabs
$('#myTabs a').click(function (e) {
	e.preventDefault()
	$(this).tab('show')
})
