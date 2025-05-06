$(document).ready(function () {

    /* ============================================= Input mask ============================================= */

    $("#preco-min,#preco-max").inputmask("numeric", {
        groupSeparator: ".",
        radixPoint: ",",
        digits: 2,
        autoGroup: true,
        prefix: "R$ ",
        placeholder: "0",
        rightAlign: false,
        removeMaskOnSubmit: true
    });
    $("#preco-produto").inputmask("numeric", {
        groupSeparator: ".",
        radixPoint: ",",
        digits: 2,
        autoGroup: true,
        prefix: "",
        placeholder: "0",
        rightAlign: false,
        removeMaskOnSubmit: true
    });

    /* ============================================= Favoritos ============================================= */

    $('.coracao').click(function () {
        // Verifica o estado atual do coração
        if ($(this).attr('data-state') === 'empty') {
            // Muda para cheio
            $(this).attr({
                'src': 'assets/favorito 2.svg',
                'data-state': 'filled'
            });
        } else {
            // Muda para vazio
            $(this).attr({
                'src': 'assets/favorito 1.svg',
                'data-state': 'empty'
            });
        }
    });

    /* ============================================= Barra de pesquisa ============================================= */

    $('.search-input').on('input', function () {
        const $input = $(this);
        const $btn = $input.siblings('.search-clear');
        $btn.toggle($input.val().length > 0);
    });

    // Se clicar no X, apaga o campo de pesquisa
    $('.search-clear').on('click', function () {
        const $btn = $(this);
        const $input = $btn.siblings('.search-input');
        $input.val('').trigger('input').focus();
    });

    /* ============================================= Checkboxes ============================================= */

    $('.checkbox').on('click', function () {
        $(this).toggleClass("checked");
    });

    /* ============================================= Botões de classificação ============================================= */

    $('.sort-button').click(function () {
        // Remove a classe 'active' de todos os botões
        $('.sort-button').removeClass('active');

        // Adiciona a classe 'active' apenas ao botão clicado
        $(this).addClass('active');

        // Obtém o tipo de classificação selecionado
        const sortType = $(this).data('sort');

        console.log('Classificar por:', sortType); // Apenas para demonstração
    });

    // Função para classificar os produtos (exemplo)
    function sortProducts(sortType) {
        // Implemente sua lógica de classificação aqui
        // Isso dependerá de como seus produtos estão estruturados
    }

    /* ============================================= Menu Hambúrguer ============================================= */

    $('.menu-toggle').click(function () {
        $(this).toggleClass('active');
        $('.nav-menu').toggleClass('active');
        $('body').toggleClass('menu-open');
    });

    /* ============================================= Estrelas ============================================= */

    $(document).on('click', '.star', function () {
        const $stars = $(this).parent().find('.star');
        const rating = $(this).data('value');

        // Atualiza as estrelas visuais
        $stars.each(function () {
            if ($(this).data('value') <= rating) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });

        // Aqui você pode adicionar código para enviar a avaliação para o servidor
        console.log('Avaliação:', rating + ' estrelas');

        // Atualiza o contador (opcional)
        const $ratingCount = $(this).closest('.product-rating').find('.rating-count');
        const currentCount = parseInt($ratingCount.text().match(/\d+/)[0]);
        $ratingCount.text('(' + (currentCount + 1) + ')');
    });

    // Armazena avaliações no localStorage
    $(document).on('click', '.star', function () {
        const productId = $(this).closest('.product-card').index(); // Ou use um ID real do produto
        const rating = $(this).data('value');

        // Salva no localStorage
        let ratings = JSON.parse(localStorage.getItem('productRatings')) || {};
        ratings[productId] = rating;
        localStorage.setItem('productRatings', JSON.stringify(ratings));

        // Atualiza a exibição
        updateRatingDisplay(productId);
    });

    function updateRatingDisplay(productId) {
        const ratings = JSON.parse(localStorage.getItem('productRatings')) || {};
        const rating = ratings[productId];

        if (rating) {
            const $stars = $(`.product-card:eq(${productId}) .star`);
            $stars.each(function () {
                if ($(this).data('value') <= rating) {
                    $(this).addClass('active');
                } else {
                    $(this).removeClass('active');
                }
            });
        }
    }

    // Carrega avaliações ao iniciar

    $('.product-card').each(function (index) {
        updateRatingDisplay(index);
    });


    /* ============================================= Overlay do produto ============================================= */

    $('.product-image, .product-name').click(function () {
        const productCard = $(this).closest('.product-card');
        const productName = productCard.find('.product-name').text();
        const productImage = productCard.find('.product-image').attr('src');
        const productPrice = productCard.find('.price-value').text();
        const productRating = productCard.find('.rating-count').text();

        // Preencher o overlay com os dados do produto
        $('.product-overlay-title').text(productName);
        $('.product-overlay-image').attr('src', productImage);
        $('.product-overlay-price').text(productPrice);

        // Ativar overlay
        $('.product-overlay, .overlay-backdrop').addClass('active');
        $('body').addClass('menu-open');
    });

    // Fechar overlay
    $('.close-overlay, .overlay-backdrop').click(function () {
        $('.product-overlay, .overlay-backdrop').removeClass('active');
        $('body').removeClass('menu-open');
    });

    // Evitar que o clique no overlay feche ele
    $('.product-overlay').click(function (e) {
        e.stopPropagation();
    });

    // Alternar entre abas
    $('.product-overlay-tab').click(function () {
        $('.product-overlay-tab').removeClass('active');
        $(this).addClass('active');
    });

    $('.product-overlay-add-to-cart').click(function () {
        // Obter os dados do produto do overlay
        const productName = $('.product-overlay-title').text();
        const productPrice = $('.product-overlay-price').text();
        const productImage = $('.product-overlay-image').attr('src');

        // Verificar se o produto já está no carrinho
        const existingItem = cartItems.find(item => item.name === productName);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cartItems.push({
                name: productName,
                price: productPrice,
                image: productImage,
                quantity: 1
            });
        }

        // Atualizar o carrinho (sem abrir o overlay)
        updateCartOverlay();

        // Atualizar o badge com a quantidade total de itens
        const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
        $('.icon-cart .badge').text(totalItems).toggle(totalItems > 0);

        // Feedback visual opcional (ex: mensagem de sucesso)
        const $button = $(this);
        $button.text('Adicionado!');
        setTimeout(() => $button.text('Adicionar ao carrinho'), 2000);

    });

    /* ============================================= Overlay de favoritos ============================================= */

    // Array para armazenar os produtos favoritados
    let favoriteProducts = [];

    // Função para abrir o overlay de favoritos
    function openFavoritesOverlay() {
        updateFavoritesOverlay();
        $('.favorites-overlay, .favorites-overlay-backdrop').addClass('active');
        $('body').addClass('menu-open');
    }

    // Função para fechar o overlay de favoritos
    function closeFavoritesOverlay() {
        $('.favorites-overlay, .favorites-overlay-backdrop').removeClass('active');
        $('body').removeClass('menu-open');
    }

    // Função para atualizar a lista de favoritos no overlay
    function updateFavoritesOverlay() {
        const favoritesList = $('.favorites-list');
        favoritesList.empty();

        if (favoriteProducts.length === 0) {
            favoritesList.append('<p class="empty-favorites">Nenhum produto favoritado ainda.</p>');
            return;
        }

        favoriteProducts.forEach(product => {
            favoritesList.append(`
            <div class="favorite-item" data-id="${product.id}">
                <img src="${product.image}" alt="${product.name}" class="favorite-item-image">
                <div class="favorite-item-info">
                    <h3 class="favorite-item-name">${product.name}</h3>
                    <span class="favorite-item-price">${product.price}</span>
                    <button class="remove-favorite">Remover dos favoritos</button>
                </div>
            </div>
        `);
        });
    }

    // Evento de clique no ícone de favoritos no header
    $('.icon-favorite').on('click', function (e) {
        e.preventDefault();
        openFavoritesOverlay();
    });

    // Evento para fechar o overlay
    $('.close-favorites-overlay, .favorites-overlay-backdrop').on('click', function () {
        closeFavoritesOverlay();
    });

    // Evitar que o clique no overlay feche ele
    $('.favorites-overlay').on('click', function (e) {
        e.stopPropagation();
    });

    // Evento de clique no botão de favorito dos produtos
    $(document).on('click', '.coracao', function () {
        const productCard = $(this).closest('.product-card');
        const productId = productCard.index();
        const productName = productCard.find('.product-name').text();
        const productImage = productCard.find('.product-image').attr('src');
        const productPrice = productCard.find('.price-value').text();

        // Verifica se o produto já está favoritado
        const existingIndex = favoriteProducts.findIndex(p => p.id === productId);

        if ($(this).attr('data-state') === 'filled') {
            // Adiciona aos favoritos
            favoriteProducts.push({
                id: productId,
                name: productName,
                image: productImage,
                price: productPrice
            });
        } else {
            // Remove dos favoritos
            favoriteProducts = favoriteProducts.filter(p => p.id !== productId);
        }

        // Atualiza o badge com a quantidade de favoritos
        $('.badge').text(favoriteProducts.length);

        // Salva no localStorage
        localStorage.setItem('favoriteProducts', JSON.stringify(favoriteProducts));
    });

    // Carrega os favoritos do localStorage ao iniciar index
    const savedFavorites = localStorage.getItem('favoriteProducts');
    if (savedFavorites) {
        favoriteProducts = JSON.parse(savedFavorites);
        $('.badge').text(favoriteProducts.length);
    }

    // Função para abrir o overlay de favoritos
    function openFavoritesOverlay() {
        updateFavoritesOverlay();
        $('.favorites-overlay, .favorites-overlay-backdrop').addClass('active');
        $('body').addClass('menu-open');
    }

    // Função para fechar o overlay de favoritos
    function closeFavoritesOverlay() {
        $('.favorites-overlay, .favorites-overlay-backdrop').removeClass('active');
        $('body').removeClass('menu-open');
    }

    // Função para atualizar a lista de favoritos no overlay
    function updateFavoritesOverlay() {
        const favoritesList = $('.favorites-list');
        favoritesList.empty();

        if (favoriteProducts.length === 0) {
            favoritesList.append('<p class="empty-favorites">Nenhum produto favoritado ainda.</p>');
            return;
        }

        favoriteProducts.forEach(product => {
            favoritesList.append(`
            <div class="favorite-item" data-id="${product.id}">
                <img src="${product.image}" alt="${product.name}" class="favorite-item-image">
                <div class="favorite-item-info">
                    <h3 class="favorite-item-name">${product.name}</h3>
                    <span class="favorite-item-price">${product.price}</span>
                    <button class="remove-favorite">Excluir</button>
                </div>
            </div>
        `);
        });
    }

    $('.icon-favorite').on('click', function (e) {
        e.preventDefault();
        openFavoritesOverlay();
    });

    // Evento para fechar o overlay
    $('.close-favorites-overlay, .favorites-overlay-backdrop').on('click', function () {
        closeFavoritesOverlay();
    });

    // Evitar que o clique no overlay feche ele
    $('.favorites-overlay').on('click', function (e) {
        e.stopPropagation();
    });

    // Evento de clique no botão de remover favoritos
    $(".favorites-overlay").on('click', '.remove-favorite', function () {
        const productId = parseInt($(this).closest('.favorite-item').data('id'));
        favoriteProducts = favoriteProducts.filter(p => p.id !== productId);

        // Atualiza o localStorage
        localStorage.setItem('favoriteProducts', JSON.stringify(favoriteProducts));

        // Atualiza o overlay
        updateFavoritesOverlay();

        // Atualiza o badge
        $('.badge').text(favoriteProducts.length);

        // Atualiza o ícone do produto correspondente
        $(`.product-card:eq(${productId}) .coracao`)
            .attr('src', 'assets/favorito 1.svg')
            .attr('data-state', 'empty');
    });

    /* ============================================= Overlay de Carrinho ============================================= */

    // Carrinho de compras
    let cartItems = [];

    // Função para abrir o overlay do carrinho
    function openCartOverlay() {
        updateCartOverlay();
        $('.cart-overlay-backdrop, .cart-overlay').addClass('active');
        $('body').addClass('menu-open');
    }

    // Função para fechar o overlay do carrinho
    function closeCartOverlay() {
        $('.cart-overlay-backdrop, .cart-overlay').removeClass('active');
        $('body').removeClass('menu-open');
    }

    // Função para atualizar o overlay do carrinho
    function updateCartOverlay() {
        const cartList = $('.cart-items');
        cartList.empty();

        if (cartItems.length === 0) {
            cartList.append('<p class="empty-cart">Seu carrinho está vazio.</p>');
            return;
        }

        cartItems.forEach((item, index) => {
            cartList.append(`
            <div class="cart-item" data-id="${index}">
                <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                <div class="cart-item-info">
                    <h3>${item.name}</h3>
                    <span class="cart-item-price">${item.price}</span>
                    <div class="cart-item-quantity">
                        <button class="quantity-btn minus">-</button>
                        <span class="quantity">${item.quantity}</span>
                        <button class="quantity-btn plus">+</button>
                    </div>
                </div>
                <button class="remove-item">×</button>
            </div>
        `);
        });

        // Atualizar totais
        updateCartTotals();

        // Evento de clique no botão de remover item do carrinho
        $(".cart-overlay").on('click', '.remove-item', function () {
            const itemId = parseInt($(this).closest('.cart-item').data('id'));
            cartItems.splice(itemId, 1);
            updateCartOverlay();

            // Atualiza ou remove o badge
            const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
            $('.icon-cart .badge').text(totalItems).toggle(totalItems > 0);
        });
    }

    // Função para atualizar os totais do carrinho
    function updateCartTotals() {
        const subtotal = cartItems.reduce((sum, item) => {
            // Extrai o valor numérico do preço (removendo "R$ " e convertendo para número)
            const priceValue = parseFloat(item.price.replace('R$ ', '').replace(',', '.'));
            return sum + (priceValue * item.quantity);
        }, 0);

        const tax = subtotal * 0.10;
        const discount = subtotal * 0.05;
        const total = subtotal + tax - discount;

        $('.summary-row:nth-child(1) span:last-child').text(`R$ ${subtotal.toFixed(2).replace('.', ',')}`);
        $('.summary-row:nth-child(2) span:last-child').text(`R$ ${tax.toFixed(2).replace('.', ',')}`);
        $('.summary-row:nth-child(3) span:last-child').text(`R$ ${discount.toFixed(2).replace('.', ',')}`);
        $('.summary-row.total span:last-child').text(`R$ ${total.toFixed(2).replace('.', ',')}`);
    }

    // Evento de clique no ícone do carrinho no header
    $('.icon-cart').on('click', function (e) {
        e.preventDefault();
        openCartOverlay();
    });

    // Evento para fechar o overlay
    $('.close-cart-overlay, .cart-overlay-backdrop').on('click', function () {
        closeCartOverlay();
    });

    // Evitar que o clique no overlay feche ele
    $('.cart-overlay').on('click', function (e) {
        e.stopPropagation();
    });

    // Eventos para adicionar itens ao carrinho (exemplo)
    $('.adicionar-ao-carrinho').on('click', function () {
        const productCard = $(this).closest('.product-card');
        const productName = productCard.find('.product-name').text();
        const productPrice = productCard.find('.price-value').text();
        const productImage = productCard.find('.product-image').attr('src');

        // Verifica se o produto já está no carrinho
        const existingItem = cartItems.find(item => item.name === productName);

        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cartItems.push({
                name: productName,
                price: productPrice,
                image: productImage,
                quantity: 1
            });
        }

        // Atualiza o overlay do carrinho
        updateCartOverlay();

        // Mostra o badge com a quantidade total de itens
        const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
        $('.icon-cart .badge').text(totalItems).toggle(totalItems > 0);
    });

    // Eventos para manipular quantidade e remover itens
    $(".cart-overlay").on('click', '.quantity-btn.plus', function () {
        const itemId = $(this).closest('.cart-item').data('id');
        cartItems[itemId].quantity += 1;
        updateCartOverlay();
    });

    $(".cart-overlay").on('click', '.quantity-btn.minus', function () {
        const itemId = $(this).closest('.cart-item').data('id');
        if (cartItems[itemId].quantity > 1) {
            cartItems[itemId].quantity -= 1;
            updateCartOverlay();
        }
    });


    // Evento para enviar pedido
    $('.submit-order').on('click', function () {
        if (cartItems.length === 0) {
            alert('Seu carrinho está vazio!');
            return;
        }

        const name = $('#campo__nome').val();
        const email = $('#campo__email').val();
        const phone = $('#campo__telefone').val();
        console.log("nome: " + name + "\nemail: " + email + "\nphone: " + phone);

        if (!name || !email || !phone) {
            alert('Por favor, preencha todas as informações de contato!');
            return;
        }

        // Aqui você pode adicionar a lógica para enviar o pedido
        //window.location.href = "https://wa.me//5547989051228?text=*Novo pedido*%0A%0A*Nome:* " + name + "%0A*Email:* " + email + "%0A*Telefone:* " + phone;
        console.log(cartItems = []);
        updateCartOverlay();
        $('.icon-cart .badge').text('0').hide();
        closeCartOverlay();
    });

    /* ============================================= Aplicar filtro ============================================= */

    $('.price-button').on('click', function () {
        // Remove "R$", espaços e converte vírgula para ponto
        const min = parseFloat($('#preco-min').val().replace(/[^\d,]/g, '').replace(',', '.')) || 0;
        const max = parseFloat($('#preco-max').val().replace(/[^\d,]/g, '').replace(',', '.')) || Infinity;

        $('.product-card').each(function () {
            const precoTexto = $(this).find('.price-value').text();
            const preco = parseFloat(precoTexto.replace(/[^\d,]/g, '').replace(',', '.'));

            if (preco >= min && preco <= max) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });



});