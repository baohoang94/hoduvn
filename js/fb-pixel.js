/**
 * Created by tn on 12/02/2016.
 */
<!-- Facebook Pixel Code -->
'use strict'
/**
 Pages
 - Trang chủ: k-highlights, key: homepage
 - Trang cate: k-listing, key: category
 - Trang subcate
 - Trang Search result
 - Trang detail page (Course relevant): k-detail
 */
function FBPIXEL() {
    this.init();
}
FBPIXEL.prototype = {
    homePage: 'Homepage',
    categoryPage: 'Category',
    subCategoryPage: 'Sub Category',
    searchPage: 'Search Result',
    detailRelevantPage: 'Detail - Course Relevant',
    cartPage: 'Cart Page',
    checkoutPage: 'Checkout Page',
    purchasePage: 'Purchase Page',
    otherPage: 'Other Page',
    tagPage: 'Tag Page',
    init: function () {
        var that = this;
        that.initDataLayer();
    },
    initDetailImpression: function (page) {
        var that = this;
        var productObj = null;
        switch (page) {
            case that.detailRelevantPage:
                var $container = $('.k-course-details-header, .k-combo-details-header');
                var $id = $container.attr('data-id');
                var $type = $container.attr('data-course-type');
                var $value = that.deCurrency($container.find('.price-list>ul>li:first').text().trim());
                if ($value === "Miễn phí") {
                    $value = 0;
                }
                if ($type == 1 || $type == 2 || $type == 3) {
                    productObj = {
                        // 'content_ids': [window.location.pathname],
                        'content_ids': [$id],
                        'content_type': 'product',
                        'value': $value,
                        'currency': 'VND'
                    };
                }
                break;
            default:
                break;
        }
        if (productObj) {
            that.insertDataDetailImpression(productObj);
        }
    },
    initAddToCart: function (page) {
        var that = this;
        switch (page) {
            case that.homePage:
            case that.searchPage:
            case that.categoryPage:
            case that.subCategoryPage:
                var $container = $('.k-popup-lesson');
                $('body').on('click', '.add-to-cart', function (e) {
                    var $id = $container.find('.modal-body').attr('data-id');
                    var $price = that.deCurrency($container.find('ul.k-popup-lesson-detail-price>li:first>span.bold').text().trim());
                    if ($price === "Miễn phí") {
                        return;
                        $price = 0;
                    }
                    var productObj = {
                        // 'content_ids': [window.location.pathname],
                        'content_ids': [$id],
                        'content_type': 'product',
                        'value': $price,
                        'currency': 'VND'
                    };
                    that.insertDataAddToCart(productObj);
                });
                break;
            case that.detailRelevantPage:
                var $container = $('.k-course-details-header, .k-combo-details-header');
                var $id = $container.attr('data-id');
                $container.find('.add-to-cart').click(function () {
                    var $price = that.deCurrency($container.find('.price-list>ul>li:first').text().trim());
                    if ($price === "Miễn phí") {
                        return;
                        $price = 0;
                    }
                    var productObj = {
                        // 'content_ids': [window.location.pathname],
                        'content_ids': [$id],
                        'content_type': 'product',
                        'value': $price,
                        'currency': 'VND'
                    };
                    that.insertDataAddToCart(productObj);
                });
                break;
            default:
                break;
        }
    },
    initPurchase: function (page) {
        var that = this;
        switch (page) {
            case that.purchasePage:
                var $container = $('#checkout-succ-online');
                if ($container.find('.checkout-succ-title').length > 0) {
                    var $checkoutListPrice = $container.find('.checkout-list-price');
                    var $totalAmount = that.deCurrency($checkoutListPrice.find('>ul>li:last>span.price').text().trim());
                    if ($totalAmount > 0) {
                        var productObj = {
                            'content_ids': [],
                            'contents': [],
                            'content_type': 'product',
                            'value': $totalAmount,
                            'currency': 'VND'
                        };
                        $container.find('ul.list>li').each(function (index) {
                            // productObj.content_ids.push(that.deUrl($(this).find('>div.text>h6>a').attr('href')));
                            // productObj.content_ids.push($(this).attr('data-id'));
                            var $id = $(this).attr('data-id');
                            var $type = $(this).attr('data-course-type');
                            var $price = that.deCurrency($(this).find('.price:first').text().trim());
                            if ($type == 1 || $type == 3) {
                                productObj.content_ids.push($id);

                                if ($price === "Miễn phí") {
                                    $price = 0;
                                }
                                productObj.contents.push({
                                    'id': $id,
                                    'item_price': $price,
                                    'quantity': 1
                                })
                            }

                        });
                        if (productObj.content_ids.length > 0) {
                            that.insertDataPurchase(productObj);
                        }
                    }
                }
                break;
            default:
                break;
        }
    },
    initCheckout: function (page) {
        var that = this;
        switch (page) {
            case that.checkoutPage:
                // var $container = $('#checkout-succ-online');
                // if ($container.find('.checkout-succ-title').length > 0) {
                var $container = $('.wrap-content-right');
                    var $checkoutListPrice = $container.find('.checkout-list-price');
                    var productObj = {
                        'content_ids': [],
                        'contents': [],
                        'content_type': 'product',
                        'value': that.deCurrency($checkoutListPrice.find('>ul>li:last>span.price').text().trim()),
                        'currency': 'VND'
                    };
                    $container.find('ul.list>li').each(function (index) {
                        // productObj.content_ids.push(that.deUrl($(this).find('>div.text>h6>a').attr('href')));
                        var $id = $(this).attr('data-id');
                        var $type = $(this).attr('data-course-type');
                        var $price = that.deCurrency($(this).find('.price:first').text().trim());
                        if ($type == 1 || $type == 3) {
                            productObj.content_ids.push($id);

                            if ($price === "Miễn phí") {
                                $price = 0;
                            }
                            productObj.contents.push({
                                'id' : $id,
                                'item_price': $price,
                                'quantity': 1
                            })
                        }
                    });

                    if (productObj.content_ids.length > 0 ) {
                        that.insertDataCheckout(productObj);
                    }
                // }
                break;
            default:
                break;
        }

    },
    initCategory: function (page) {
        var that = this;
        switch (page) {
            case that.homePage:
                var productObj = {
                    'content_type': 'product',
                    'content_name': 'HomePage',
                    'content_ids': [],
                    'contents': [],
                    'currency': 'VND',
                    'value': 0,
                };
                var crawledData = that.crawlPage('homePage');
                if (crawledData.products.length > 0 ) {
                    for (var i = 0; i < crawledData.products.length; i++) {
                        var product = crawledData.products[i];
                        // console.log(product);
                        if (product.type == 1 || product.type == 2 || product.type == 3) {
                            productObj.content_ids.push(product.id);

                            productObj.contents.push({
                                'id': product.id,
                                'quantity': 1,
                                'item_price': product.price
                                // 'currency': 'VND',
                            });
                        }

                        if (productObj.contents.length > 9) {
                            break;
                        }
                    }
                }

                if (productObj.content_ids.length > 0) {
                    that.insertDataCategory(productObj);
                }
                break;
            case that.categoryPage:
                // no break;
            case that.subCategoryPage:
                var productObj = {
                    'content_type': 'product',
                    'content_name': 'CategoryPage',
                    'content_ids': [],
                    'contents': [],
                    'currency': 'VND',
                };
                var crawledData = that.crawlPage('categoryPage');
                if (crawledData.products.length > 0 ) {
                    for (var i = 0; i < crawledData.products.length; i++) {
                        var product = crawledData.products[i];
                        // console.log(product);
                        if (product.type == 1 || product.type == 2 || product.type == 3) {
                            productObj.content_ids.push(product.id);

                            productObj.contents.push({
                                'id': product.id,
                                'quantity': 1,
                                'item_price': product.price
                                // 'currency': 'VND',
                            });
                        }

                        if (productObj.contents.length > 9) {
                            break;
                        }
                    }
                }
                if (productObj.content_ids.length > 0) {
                    that.insertDataCategory(productObj);
                }
                break;
            case that.searchPage:

                break;
            default:
                break;
        }
    },
    initTag: function (page) {
        var that = this;
        switch (page) {
            case that.tagPage:
                var productObj = {
                    'content_type': 'product',
                    'content_name': 'TagPage',
                    'content_ids': [],
                    'contents': [],
                    'currency': 'VND',
                };
                var crawledData = that.crawlPage('categoryPage');
                if (crawledData.products.length > 0 ) {
                    for (var i = 0; i < crawledData.products.length; i++) {
                        var product = crawledData.products[i];
                        // console.log(product);
                        if (product.type == 1 || product.type == 2 || product.type == 3) {
                            productObj.content_ids.push(product.id);

                            productObj.contents.push({
                                'id': product.id,
                                'quantity': 1,
                                'item_price': product.price
                                // 'currency': 'VND',
                            });
                        }

                        if (productObj.contents.length > 9) {
                            break;
                        }
                    }
                }
                if (productObj.content_ids.length > 0) {
                    that.insertTagPage(productObj);
                }
                break;

            default:
                break;
        }
    },
    initSearch: function (page) {
        var that = this;
        var productObj = {
            'content_type': 'product',
            // 'content_name': 'CategoryPage',
            'search_string': new URL(window.location.href).searchParams.get("q"),
            'currency': 'VND',
            'content_ids': [],
            'contents': [],
        };
        var crawledData = that.crawlPage('categoryPage');
        if (crawledData.products.length > 0 ) {
            for (var i = 0; i < crawledData.products.length; i++) {
                var product = crawledData.products[i];
                // console.log(product);
                if (product.type == 1 || product.type == 2 || product.type == 3) {
                    productObj.content_ids.push(product.id);

                    productObj.contents.push({
                        'id': product.id,
                        'quantity': 1,
                        'item_price': product.price
                        // 'currency': 'VND',
                    });
                }

                if (productObj.contents.length > 9) {
                    break;
                }
            }
        }

        if (productObj.content_ids.length > 0) {
            that.insertDataSearch(productObj);
        }
    },
    insertDataDetailImpression: function (productObj) {
        fbq('track', 'ViewContent', productObj);
    },
    insertDataAddToCart: function (productObj) {
        fbq('track', 'AddToCart', productObj);
    },
    insertDataPurchase: function (productObj) {
        fbq('track', 'Purchase', productObj);
    },
    insertDataCategory: function (productObj) {
        fbq('track', 'ViewCategory', productObj)
    },
    insertDataSearch: function (params) {
        fbq('track', 'Search', params)
    },
    insertDataCheckout: function (params) {
        fbq('track', 'InitiateCheckout', params)
    },
    insertTagPage: function (params) {
        fbq('track', 'ViewTags', params)
    },
    initDataLayer: function () {
        var that = this;
        var pathName = window.location.pathname;
        // var search = window.location.search;

        var fullUrl = window.location.href;
        var parsedUrl = new URL(fullUrl);
        var search = parsedUrl.searchParams.get("q");

        var slugPattern = /[a-z0-9-]+/g;
        var regex = new RegExp(slugPattern);
        var pageMatch = pathName.match(regex);
        if (pageMatch === null) {
            that.initAddToCart(that.homePage);
            // that.initCategory(that.homePage);
        } else if (pageMatch.length > 0 && pageMatch[0] === "gio-hang") {
            // code for cart page
        } else if (pageMatch.length > 0 && pageMatch[0] === "thanh-toan" && pageMatch[1] === "thanh-cong") {
            that.initPurchase(that.purchasePage);
        } else if (pageMatch.length > 0 && pageMatch[0] === "thanh-toan") {
            // code for checkout page
            that.initCheckout(that.checkoutPage);
        } else if (pageMatch.length > 0 && pageMatch[0] === "tag") {
            // code for tag page
            that.initTag(that.tagPage);
        } else if (pageMatch.length > 0 && (search === "" || search === null) && $('.k-course-details-related').length > 0) {
            that.initDetailImpression(that.detailRelevantPage);
            that.initAddToCart(that.detailRelevantPage);
        } else if (pageMatch.length < 3 && (search === "" || search === null) && $('#k-listing').length > 0) {
            // code for category page
            that.initCategory(that.categoryPage);
            that.initAddToCart(that.categoryPage);

        } else if (pageMatch.length >= 3 && (search === "" || search === null) && $('#k-listing').length > 0) {
            // code for sub-category page
            that.initCategory(that.categoryPage);
            that.initAddToCart(that.categoryPage);

        } else if (pageMatch.length > 0 && (search !== "" && search !== null) && $('#k-listing').length > 0) {
            // code for search page (text only)
            that.initSearch();
            that.initAddToCart(that.searchPage);
        } else {
            // code for other page
        }
    },
    deCurrency: function (originalStr) {
        var str = originalStr.match(/[\d\,\.]+/g);
        if (str) {
            return str[0].replace(/,/g, '.').replace(/\s/g, '').replace(/\./g, ''); // return decimal
        }
        return originalStr;
    },
    deUrl: function (str) {
        return str.replace(/\-p[0-9]{1,}.*/g, '');
    },
    crawlPage: function(pageName) {
        var that = this;
        switch (pageName) {
            case 'homePage':
                var $ret = {
                    'products': []
                };
                    // Product list:
                var $container = $('#k-highlights');
                var products_raw = $container.find('> ul.k-box-card-list > li.k-box-card');
                if (products_raw.length > 0) {
                    products_raw.each(function (index, product_raw) {
                        // console.log(product_raw);
                        var product = {};
                        product.raw = product_raw;
                        product.id = $(product_raw).find('.k-box-card-wrap').attr('data-id');
                        product.type = $(product_raw).find('.k-box-card-wrap').attr('data-course-type');
                        product.price = that.deCurrency($(product_raw).find('.k-box-card-wrap div.view-price li.price').text().trim());
                        if (product.price == "Miễn phí") {
                            product.price = 0;
                        }
                        product.href = $(product_raw).find('> a.card-popup').attr('href');
                        $ret.products.push(product)
                    })
                }

                return $ret;
                break;
            case 'categoryPage':
                // no break
            case 'searchPage':
                var $ret = {
                    'products': []
                };
                    // Product list:
                var $container = $('#k-listing');
                var products_raw = $container.find('ul.k-box-card-list li.k-box-card');
                if (products_raw.length > 0) {
                    products_raw.each(function (index, product_raw) {
                        // console.log(product_raw);
                        var product = {};
                        product.raw = product_raw;
                        product.id = $(product_raw).find('.k-box-card-wrap').attr('data-id');
                        product.type = $(product_raw).find('.k-box-card-wrap').attr('data-course-type');
                        product.price = that.deCurrency($(product_raw).find('.k-box-card-wrap div.view-price li.price').text().trim());
                        if (product.price == "Miễn phí") {
                            product.price = 0;
                        }
                        product.href = $(product_raw).find('> a.card-popup').attr('href');
                        $ret.products.push(product)
                    })
                }
                return $ret;
                break;
            default:
                return null;
                break;
        }
    }
};

