( function( blocks, element ) {
    var el = element.createElement;
 
    var blockStyle = {
        color: '#000',
        padding: '40px',
        textAlign: 'center'
    };
 
    blocks.registerBlockType( 'js-test/cta-block', {
        title: 'CTA Block',
        icon: 'universal-access-alt',
        category: 'common',
        example: {},
        edit: function() {
            return el(
                'div',
                { style: blockStyle },
                el(
                    'h2',
                    null,
                    'Join the 117,382 Amazon sellers who run their business with Jungle Scout.'
                ),
                el(
                    'p',
                    null,
                    'Risk-free, 100% money-back guarantee.'
                ),
                el(
                    'button',
                    null,
                    'Get started now.'
                )
            );
        },
        save: function() {
            return el(
                'div',
                { style: blockStyle },
                el(
                    'h2',
                    null,
                    'Join the 117,382 Amazon sellers who run their business with Jungle Scout.'
                ),
                el(
                    'p',
                    null,
                    'Risk-free, 100% money-back guarantee.'
                ),
                el(
                    'button',
                    null,
                    'Get started now.'
                )
            );
        },
    } );
}(
    window.wp.blocks,
    window.wp.element
) );