/*	Keila Bowers
	ASL 201603
	Biblio Slate JS
*/ 




    $('#myTabs a').click(function (e) {
    e.preventDefault();

    var oldurl = $(this).window.location.pathname();
    var newurl = url.replace("home").attr("data-url");
    var href = this.hash;
    var pane = $(this);

    // ajax load from data-url
    $(href).load(url,function(result){      
        pane.tab('show');
    });
});

// load first tab content
$('home').load($('.active a').attr("data-url"),function(result){
  $('.active a').tab('show');
});
