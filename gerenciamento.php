<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plantas Carlinhos - Gerenciamento de Produtos</title>
    <link rel="stylesheet" href="css/gerenciamento.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Jacques+Francois&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="app-container">
      <!-- Barra Lateral -->
      <div class="sidebar">
        <div class="logo-container">
          <div class="logo-icon">
            <div class="logo-shape">
              <img src="assets/logoplanta.svg" class="logo-shape">
            </div>
          </div>
          <div class="logo-text">Plantas Carlinhos</div>
        </div>

        <div class="menu-container">
          <div class="menu-section">
            <div class="menu-item active">
              <div class="menu-icon">
                <div class="products-icon">
                  <img src="assets/produtos.svg" class="menu-section">
                </div>
              </div>
              <div class="menu-text" style="color: #47A358;">Produtos</div>
            </div>
            <div class="menu-item">
              <div class="menu-icon">
                <div class="orders-icon">
                  <img src="assets/pedido.svg" class="menu-section">
                </div>
              </div>
              <a href="pedidos.php" style="text-decoration: none;">
                <div class="menu-text">Pedidos</div>
              </a>
            </div>
            <div class="menu-item">
              <div class="menu-icon">
                <div class="settings-icon">
                  <img src="assets/configuracao.svg" class="menu-section">
                </div>
              </div>
              <div class="menu-text">Configurações</div>
            </div>
          </div>

          <div class="menu-item logout">
            <div class="menu-icon">
              <div class="logout-icon">
                <a href="admin.php">
                  <img src="assets/log out.svg" class="menu-section">
                </a>
              </div>
            </div>
            <a href="admin.php"style="text-decoration: none;">Log Out</a>
          </div>
        </div>
      </div>

      <!-- Conteúdo Principal -->
      <div class="main-content">
        <!-- Cabeçalho -->
        <div class="header">
          <div class="header-title">Produtos</div>
          <div class="header-actions">
            <div class="action-button import">
              <img src="assets/importar.svg">
              <div class="action-text">Importar</div>
            </div>
            <a href="cadastrarproduto.php" style="text-decoration: none;">
              <div class="action-button primary">
                <img src="assets/cadastrar.svg">
                <div class="action-text">Cadastrar produtos</div>
              </div>
            </a>
          </div>
        </div>

        <!-- Conteúdo -->
        <div class="content-container">
          <!-- Barra de Filtros -->
          <div class="filter-bar">
            <div class="filter-options">
              <div class="filter-button">
                <div class="filter-icon">
                  <img src="assets/filtro.svg" class="filter-options">
                </div>
                <div class="filter-text">Filtro</div>
              </div>
            </div>

            <div class="search-bar">
              <div class="search-input">
                <img src="assets/seach.svg">
                <div class="search-placeholder">Pesquise</div>
              </div>
              <!--   <div class="search-action">
                            <div class="action-icon">
                                <img src="assets/configuracao.svg" class="search-icon">
                            </div>
                        </div>-->
            </div>
          </div>

          <table class="products-table">
            <thead>
              <tr>
                <th>
                  <div class="header-checkbox"></div>
                  <span>Produto</span>
                  <img src="assets/seleção.svg" alt="Ordenar Produto">
                </th>
                <th>
                <span>Categoria</span>
                  <img src="assets/seleção.svg" alt="Ordenar Categoria">
                </th>
                <th>
                <span>Preço (R$)</span>
                  <img src="assets/seleção.svg" alt="Ordenar Preço">
                </th>
                <th>
                <span>Estoque</span>
                  <img src="assets/seleção.svg" alt="Ordenar Estoque">
                </th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="row-checkbox"></div>
                  <img src="assets/ficuselastica.png" alt="Ficus Elastica">
                  <span>Ficus Elastica</span>
                </td>
                <td></td>
                <td><span class="price-badge">R$ 53,00</span></td>
                <td>0</td>
                <td>
                  <img src="assets/editar.svg" alt="Editar">
                  <img src="assets/excluir.svg" alt="Excluir">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="row-checkbox"></div>
                  <img src="assets/tricolor.png" alt="Tricolor">
                  <span>Tricolor</span>
                </td>
                <td></td>
                <td><span class="price-badge">R$ 15,00</span></td>
                <td>20</td>
                <td>
                  <img src="assets/editar.svg" alt="Editar">
                  <img src="assets/excluir.svg" alt="Excluir">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="row-checkbox"></div>
                  <img
                    src="assets/palmeiraarecabambu.png"
                    alt="Palmeira Areca Bambu"
                  >
                  <span>Palmeira Areca Bambu</span>
                </td>
                <td></td>
                <td><span class="price-badge">R$ 50,00</span></td>
                <td>100</td>
                <td>
                  <img src="assets/editar.svg" alt="Editar">
                  <img src="assets/excluir.svg" alt="Excluir">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="row-checkbox"></div>
                  <img src="assets/palmeirarafia.png" alt="Palmeira Ráfia">
                  <span>Palmeira Ráfia</span>
                </td>
                <td></td>
                <td><span class="price-badge">R$ 10,00</span></td>
                <td>60</td>
                <td>
                  <img src="assets/editar.svg" alt="Editar">
                  <img src="assets/excluir.svg" alt="Excluir">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="row-checkbox"></div>
                  <img src="assets/croton.png" alt="Croton">
                  <span>Croton</span>
                </td>
                <td></td>
                <td><span class="price-badge">R$ 20,00</span></td>
                <td>50</td>
                <td>
                  <img src="assets/editar.svg" alt="Editar">
                  <img src="assets/excluir.svg" alt="Excluir">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="row-checkbox"></div>
                  <img
                    src="assets/amendoeira-da-praia.png"
                    alt="Amendoeira-da-praia"
                  >
                  <span>Amendoeira-da-praia</span>
                </td>
                <td></td>
                <td><span class="price-badge">R$ 10,00</span></td>
                <td>300</td>
                <td>
                  <img src="assets/editar.svg" alt="Editar">
                  <img src="assets/excluir.svg" alt="Excluir">
                </td>
              </tr>
              <tr>
                <td>
                  <div class="row-checkbox"></div>
                  <img
                    src="assets/hibiscoverde.png"
                    alt="Hibiscus Verde Trançado"
                  >
                  <span>Hibiscus Verde Trançado</span>
                </td>
                <td></td>
                <td><span class="price-badge">R$ 28,00</span></td>
                <td>200</td>
                <td>
                  <img src="assets/editar.svg" alt="Editar">
                  <img src="assets/excluir.svg" alt="Excluir">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>