<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plantas Carlinhos</title>
  <link rel="icon" type="image/x-icon" href="assets/favicon.png">
  <link rel="stylesheet" href="css/index.css">
  <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.inputmask.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
  <header class="header">
    <div class="logo-container">
      <div class="logo-icon">
        <img src="assets/logoplanta.svg">
      </div>
      <h1 class="logo-texto">Plantas Carlinhos</h1>
    </div>
    <!-- Botão do menu hambúrguer -->
    <div class="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="nav-menu">
      <a href="#" class="nav-link active">Loja</a>
      <a href="#" class="nav-link">Contato</a>
      <a href="#" class="nav-link">Sobre</a>
      <!-- Ícones lado a lado -->
      <div class="mobile-icons">
        <div class="icon-favorite">
          <div class="heart-icon">
            <img src="assets/headercoracao.svg">
          </div>
          <span>Favoritos</span>
          <div class="badge">1</div>
        </div>
        <div class="icon-cart">
          <div class="cart-icon">
            <img src="assets/headercarrinho.svg">
          </div>
          <span>Carrinho</span>
        </div>
      </div>
    </nav>
    <div class="header-icons">
      <div class="icon-favorite">
        <div class="heart-icon">
          <img src="assets/headercoracao.svg">
        </div>
        <div class="badge">1</div>
      </div>
      <div class="icon-cart">
        <div class="cart-icon">
          <img src="assets/headercarrinho.svg">
        </div>
      </div>
    </div>
  </header>

  <div class="main-container">
    <aside class="sidebar">
      <div class="sidebar-section">
        <div class="sidebar-title">Filtrar</div>
      </div>

      <div class="sidebar-section">
        <div class="sidebar-title">Categorias</div>
        <div class="checkbox-item active">
          <div class="checkbox checked">
            <img src="assets/confirm.svg">
          </div>
          <span>Plantas Externas</span>
        </div>
        <div class="checkbox-item active">
          <div class="checkbox checked">
            <img src="assets/confirm.svg">
          </div>
          <span>Plantas Internas</span>
        </div>
        <div class="checkbox-item active">
          <div class="checkbox checked">
            <img src="assets/confirm.svg">
          </div>
          <span>Plantas Internas</span>
        </div>
      </div>

      <div class="sidebar-section">
        <div class="sidebar-title">Preço</div>
        <div class="price-range-container">
          <div class="price-inputs">
            <div class="price-input-group">
              <label for="preco-min">Min</label>
              <input id="preco-min" class="price-input" placeholder="R$ 20">
            </div>
            <div class="price-input-group">
              <label for="preco-max">Max</label>
              <input id="preco-max" class="price-input" placeholder="R$ 100">
            </div>
          </div>
          <button class="price-button">Aplicar filtro</button>
        </div>
      </div>

      <div class="sidebar-section">
        <div class="sidebar-title">Avaliação</div>
        <div class="rating-item">
          <div class="checkbox checked"><img src="assets/confirm.svg"></div>
          <span>acima</span>
        </div>
      </div>
    </aside>

    <main class="content">
      <div class="content-header">
        <div class="search-bar">
          <div class="search-icon">
            <img src="assets/seach.svg" class="search-icon">
          </div>
          <input type="text" placeholder="Pesquisar" class="search-input">
          <div class="search-clear">
            <img src="assets/clear.svg">
          </div>
        </div>

        <div class="sort-options">
          <span>Classificar:</span>
          <button class="sort-button active" data-sort="relevant">
            Relevante
          </button>
          <button class="sort-button" data-sort="popular">Popular</button>
          <button class="sort-button" data-sort="newest">Mais Novos</button>
        </div>
      </div>

      <div class="product-grid">
        <!-- Produto 1 -->
        <div class="product-card">
          <img src="assets/ficuselastica.png" alt="Ficus Elastica" class="product-image">
          <button class="favorite-button">
            <img class="coracao" src="assets/favorito 1.svg" data-state="empty">
          </button>
          <div class="product-info">
            <h3 class="product-name">Ficus Elastica</h3>
            <div class="product-rating">
              <div class="rating-stars">
                <span class="star" data-value="1">★</span>
                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
              </div>
              <span class="rating-count">(147)</span>
            </div>
          </div>
          <div class="product-footer">
            <div class="price-info">
              <span class="price-label">Preço</span>
              <span class="price-value">R$ 53,00</span>
            </div>
            <button class="adicionar-ao-carrinho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>

        <!-- Produto 2 -->
        <div class="product-card">
          <img src="assets/tricolor.png" alt="Tricolor" class="product-image">
          <button class="favorite-button">
            <img class="coracao" src="assets/favorito 1.svg" data-state="empty">
          </button>
          <div class="product-info">
            <h3 class="product-name">Tricolor</h3>
            <div class="product-rating">
              <div class="rating-stars">
                <span class="star" data-value="1">★</span>
                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
              </div>
              <span class="rating-count">(300)</span>
            </div>
          </div>
          <div class="product-footer">
            <div class="price-info">
              <span class="price-label">Preço</span>
              <span class="price-value">R$ 18,00</span>
            </div>
            <button class="adicionar-ao-carrinho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>

        <!-- Produto 3 -->
        <div class="product-card">
          <img src="assets/palmeiraarecabambu.png" alt="Palmeira Areca Bambu" class="product-image">
          <button class="favorite-button">
            <img class="coracao" src="assets/favorito 1.svg" data-state="empty">
          </button>
          <div class="product-info">
            <h3 class="product-name">Palmeira Areca Bambu</h3>
            <div class="product-rating">
              <div class="rating-stars">
                <span class="star" data-value="1">★</span>
                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
              </div>
              <span class="rating-count">(150)</span>
            </div>
          </div>
          <div class="product-footer">
            <div class="price-info">
              <span class="price-label">Preço</span>
              <span class="price-value">R$ 50,00</span>
            </div>
            <button class="adicionar-ao-carrinho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>

        <!-- Produto 4 -->
        <div class="product-card">
          <img src="assets/palmeirarafia.png" alt="Palmeira Ráfia" class="product-image">
          <button class="favorite-button">
            <img class="coracao" src="assets/favorito 1.svg" data-state="empty">
          </button>
          <div class="product-info">
            <h3 class="product-name">Palmeira Ráfia</h3>
            <div class="product-rating">
              <div class="rating-stars">
                <span class="star" data-value="1">★</span>
                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
              </div>
              <span class="rating-count">(55)</span>
            </div>
          </div>
          <div class="product-footer">
            <div class="price-info">
              <span class="price-label">Preço</span>
              <span class="price-value">R$ 10,00</span>
            </div>
            <button class="adicionar-ao-carrinho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>

        <!-- Produto 5 -->
        <div class="product-card">
          <img src="assets/croton.png" alt="Croton" class="product-image">
          <button class="favorite-button">
            <img class="coracao" src="assets/favorito 1.svg" data-state="empty">
          </button>
          <div class="product-info">
            <h3 class="product-name">Croton</h3>
            <div class="product-rating">
              <div class="rating-stars">
                <span class="star" data-value="1">★</span>
                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
              </div>
              <span class="rating-count">(1950)</span>
            </div>
          </div>

          <div class="product-footer">
            <div class="price-info">
              <span class="price-label">Preço</span>

              <span class="price-value">R$ 20,00</span>
            </div>

            <button class="adicionar-ao-carrinho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>

        <!-- Produto 6 -->

        <div class="product-card">
          <img src="assets/amendoeira-da-praia.png" alt="Amendoeira-da-praia" class="product-image">

          <button class="favorite-button">
            <img class="coracao" src="assets/favorito 1.svg" data-state="empty">
          </button>

          <div class="product-info">
            <h3 class="product-name">Amendoeira-da-praia</h3>

            <div class="product-rating">
              <div class="rating-stars">
                <span class="star" data-value="1">★</span>

                <span class="star" data-value="2">★</span>
                <span class="star" data-value="3">★</span>
                <span class="star" data-value="4">★</span>
                <span class="star" data-value="5">★</span>
              </div>

              <span class="rating-count">(200)</span>
            </div>
          </div>

          <div class="product-footer">
            <div class="price-info">
              <span class="price-label">Preço</span>

              <span class="price-value">R$ 10,00</span>
            </div>

            <button class="adicionar-ao-carrinho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>

        <!-- Produto 7 -->

        <div class="product-card">
          <img src="assets/hibiscoverde.png" alt="Hibiscus Verde Trançado" class="product-image">

          <button class="favorite-button">
            <img class="coracao" src="assets/favorito 1.svg" data-state="empty">
          </button>

          <div class="product-info">
            <h3 class="product-name">Hibiscus Verde Trançado</h3>

            <div class="product-rating">
              <div class="rating-stars">
                <span class="star" data-value="1">★</span>

                <span class="star" data-value="2">★</span>

                <span class="star" data-value="3">★</span>

                <span class="star" data-value="4">★</span>

                <span class="star" data-value="5">★</span>
              </div>

              <span class="rating-count">(240)</span>
            </div>
          </div>

          <div class="product-footer">
            <div class="price-info">
              <span class="price-label">Preço</span>

              <span class="price-value">R$ 28,00</span>
            </div>

            <button class="adicionar-ao-carrinho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>

        <!-- Produto 8 -->

        <div class="product-card">
          <img src="assets/estrelicia.png" alt="Estrelícia" class="product-image">

          <button class="favorite-button">
            <img class="coracao" src="assets/favorito 1.svg" data-state="empty">
          </button>

          <div class="product-info">
            <h3 class="product-name">Estrelícia</h3>

            <div class="product-rating">
              <div class="rating-stars">
                <span class="star" data-value="1">★</span>

                <span class="star" data-value="2">★</span>

                <span class="star" data-value="3">★</span>

                <span class="star" data-value="4">★</span>

                <span class="star" data-value="5">★</span>
              </div>

              <span class="rating-count">(245)</span>
            </div>
          </div>

          <div class="product-footer">
            <div class="price-info">
              <span class="price-label">Preço</span>

              <span class="price-value">R$ 25,00</span>
            </div>

            <button class="adicionar-ao-carrinho">
              Adicionar ao carrinho
            </button>
          </div>
        </div>
      </div>
    </main>
  </div>
  <!-- ============================================= Overlay dos produtos ============================================= -->
  <div class="overlay-backdrop"></div>
  <div class="product-overlay">
    <button class="close-overlay">
      <img src="assets/clear.svg" alt="Fechar">
    </button>
    <div class="product-overlay-content">
      <img src="" alt="" class="product-overlay-image">
      <h2 class="product-overlay-title">
        Monstera Deliciosa Variegata (Large)
      </h2>
      <p class="product-overlay-description">
        Plantas Ornamentais
        <span class="product-overlay-read-more">ler mais</span>
      </p>
      <div class="product-overlay-tabs">
        <div class="product-overlay-tab active">Detalhes</div>
        <div class="product-overlay-tab">Avaliações</div>
      </div>
      <div class="product-overlay-details">
        <div class="product-overlay-detail">
          <span>120 cm</span>
        </div>
        <div class="product-overlay-detail">
          <span></span>
        </div>
      </div>
      <div class="product-overlay-price">$325</div>
      <button class="product-overlay-add-to-cart">Add ao carrinho</button>
    </div>
  </div>
  
  <!-- ============================================= Overlay de Favorito ============================================= -->
  <div class="favorites-overlay-backdrop"></div>
  <div class="favorites-overlay">
      <button class="close-favorites-overlay">
          <img src="assets/clear.svg" alt="Fechar">
      </button>
      <div class="favorites-overlay-content">
          <h2>Meus favoritos</h2>
          <div class="favorites-list">
              <!-- Itens serão adicionados dinamicamente via JavaScript -->
          </div>
      </div>
  </div>

  <!-- ============================================= Overlay de Carrinho ============================================= -->
  <div class="cart-overlay-backdrop"></div>
  <div class="cart-overlay">
      <div class="cart-overlay-header">
          <h2>Meu Carrinho</h2>
          <button class="close-cart-overlay">
              <img src="assets/clear.svg" alt="Fechar">
          </button>
      </div>
      
      <div class="cart-items">
          <!-- Itens serão adicionados dinamicamente -->
          <div class="cart-item">
              <img src="assets/ficuselastica.png" alt="Ficus Elastica" class="cart-item-image">
              <div class="cart-item-info">
                  <h3>Haworthia</h3>
                  <span class="cart-item-price">R$ 00.00</span>
                  <div class="cart-item-quantity">
                      <button class="quantity-btn minus">-</button>
                      <span class="quantity">1</span>
                      <button class="quantity-btn plus">+</button>
                  </div>
              </div>
              <button class="remove-item">×</button>
          </div>
      </div>
      
      <div class="cart-contact-form">
          <h3>Informações de Contato</h3>
          <input id="campo__nome" type="text" placeholder="Nome completo" class="contact-input" value="João Ricardo">
          <input id="campo__email" type="email" placeholder="Email" class="contact-input" value="joaoricardo@gmail.com">
          <input id="campo__telefone" type="tel" placeholder="Telefone" class="contact-input" value="(47) 1234-5678">
      </div>
      
      <div class="cart-summary">
          <div class="summary-row">
              <span>Subtotal</span>
              <span>R$ 000.00</span>
          </div>
          <div class="summary-row">
              <span>Taxa 10%</span>
              <span>R$ 000.00</span>
          </div>
          <div class="summary-row">
              <span>Desconto 5%</span>
              <span>R$ 000.00</span>
          </div>
          <div class="summary-row total">
              <span>Total</span>
              <span>R$ 000.00</span>
          </div>
      </div>
      
      <button class="submit-order">Enviar Pedido</button>
  </div>

  <footer class="footer">
    <div class="footer-links">
      <div class="links-column">
        <h4>Contate-nos</h4>

        <a href="#">Whatsapp</a>

        <a href="#">Instagram</a>
      </div>

      <div class="links-column">
        <h4>Recursos</h4>

        <a href="admin.php">Login do proprietário</a>
      </div>
    </div>

    <div class="social-icons">
      <div class="social-icon">
        <a href="">
          <img src="assets/whatsapp.svg">
        </a>
      </div>
      <div class="social-icon">
        <a href="">
          <img src="assets/instagram.svg">
        </a>
      </div>
    </div>
  </footer>
</body>

</html>