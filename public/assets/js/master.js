jQuery(document).ready(function ($) {
    $('.price-toggler').on('change', (e) => {
        if (e.target.checked) {
            $('.bprice').text( 48 );
            $('.pprice').text( 84 );
            $('.aprice').text( 156 );
            $('.prprice').text( 300 );
            $('.bplan').text( 'Year' );
            $('.aplan').text( 'Year' );
            $('.pplan').text( 'Year' );
            $('.prplan').text( 'Year' );
        }else{
            $('.bprice').text( 4 );
            $('.pprice').text( 7 );
            $('.aprice').text( 13 );
            $('.prprice').text( 25 );
            $('.bplan').text('Month');
            $('.aplan').text( 'Month' );
            $('.pplan').text( 'Month' );
            $('.prplan').text( 'Month' );
        }
    });
});