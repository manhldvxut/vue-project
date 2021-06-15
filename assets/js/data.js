/*  stack
------------------------------------------------------------------------------------------------------------------------*/
var intViewportWidth = window.innerWidth;


$(function() {
  setTimeout(function(){
    sliderTop();
    pickupSlider()
  }, 100);
  
})

/*  data
------------------------------------------------------------------------------------------------------------------------*/
// JSON読み込み
axios
  .get(data)
  .then(function(res){
    showData(res.data);
  })
  .catch(function(err){
    console.log(err);
  })

function showData(data){
  var app = new Vue(
  {
    el: '#data',
    data: {

      data: data, //type01で使用
      listPickup: [], //type02、type03で使用
      products: [], //type02、type03で使用
      news: [], //type02、type03で使用
      footerNav02: [], //type02、type03で使用
      headerNav: [], //type02、type03で使用
      active: false,  // active when click
      CurrentPath: '', // check path
    },

    mounted:function(){
      
      // products〜03の整形。カテゴリー数に応じて増減する。
      let arrPickup = new Array(),
          arr01 = new Array(),
          arr02 = new Array(),
          arr03 = new Array(),
          arr04 = new Array();

      for (var i = 0; i < data.length; i++) {
        if(data[i].category.indexOf('header_nav02') >= 0) {
          arr04.push(data[i]);
        };
        if(data[i].category.indexOf('footer_nav02') >= 0) {
          arr03.push(data[i]);
        }
        if(data[i].category.indexOf('pickup') >= 0) {
          arrPickup.push(data[i]);
        }
        if(data[i].category.indexOf('product') >= 0) {
          arr01.push(data[i]);
        }
        if(data[i].category.indexOf('news') >= 0) {
          arr02.push(data[i]);
        }
      }

      this.listPickup = arrPickup;
      this.products = arr01;
      this.news = arr02;
      this.footerNav02 = arr03;
      this.headerNav = arr04;

      return;
    },
    methods: {
      // <br>タグ対応
      brTxt: function(txt) {
        return txt.replace(/\r?\n/g,' <br>');
      },

      checkRouter: function () { // check path
        this.CurrentPath = location.pathname;
      },

      handleSCroll (event) {
        let header = document.querySelector(".header");
        if (window.scrollY > 650 && !header.className.includes('header--bgchange')) {
        header.classList.add('header--bgchange'); 
        } else if (window.scrollY < 650) {
          header.classList.remove('header--bgchange');
        }
      },
    },
    watch: {
      active: function(){
        document.body.style.overflow = this.active ? 'hidden' : ''
      },
    },
    created(){
      window.addEventListener('scroll', this.handleSCroll);
    },
    destroyed(){
      window.removeEventListener('scroll', this.handleSCroll);
    },
    directives: { // scroll fade in
      infocus: {
        isLiteral: true,
        inserted: (el, binding, vnode) => {
          let f = () => {
            let rect = el.getBoundingClientRect()
            let inView = (
              rect.width > 0 &&
              rect.height > 0 &&
              rect.top >= 0 &&
              rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
            )
            if (inView) {
              el.classList.add(binding.value)
              window.removeEventListener('scroll', f)
            }
          }
          window.addEventListener('scroll', f)
          f()
        }
      }
    }
  })
}

function sliderTop() {
  const slider = $(document).find('.js-slider-top');
  let sliderCont = slider.children('*').length;

  //スライダーの枚数が1より多い場合に発火
  if (sliderCont > 1) {
    slider.slick({
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      infinite: true,
      speed: 800,
      fade: true,
      cssEase: 'linear'
    });
  }
}

function pickupSlider() {
  const sliderPickup = $(document).find('.js-slider-pickup');
  let sliderContPickup = sliderPickup.children('*').length;

  //スライダーの枚数が1より多い場合に発火
  if (sliderContPickup > 1) {
    sliderPickup.slick({
      dots: true,
      touchThreshold : 100,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      centerMode: true,
      responsive: [
        {
            breakpoint: 9999,
            settings: "unslick"
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
      ]
    });
  }
}

