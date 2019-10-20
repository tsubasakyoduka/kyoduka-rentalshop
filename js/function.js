$(function() {
    $('#vegas').vegas({
        slides: [
            { src: '../img/idea.jpg' },
            { src: '../img/idea.jpg' },
           
        ],
        transition: 'fade', //スライドを遷移させる際のアニメーション
        transitionDuration: 4000, //スライドの遷移アニメーションの時間
        // delay: 10000, //スライド切り替え時の遅延時間
        animation: 'random', //スライド表示中のアニメーション
        animationDuration: 11000, //スライド表示中のアニメーションの時間
    });
    });