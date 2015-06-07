/**
 * Created by gabb3 on 07/06/15.
 */

$(document).ready(function() {

    // add img-responsive class to Redactor added images
    $('p[data-redactor-inserted-image=true]').find('img').addClass('img-responsive');

});