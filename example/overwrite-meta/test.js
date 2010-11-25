JX.behavior('test', function() {


  JX.Stratcom.listen(
    'click',
    'data-link',
    function (e) {
      console.log(e.getData()['data-link']);
    });

  JX.Stratcom.listen(
    'click',
    'request',
    function (e) {
      new JX.Request('more_meta.php', JX.bag).send();
    });

});
