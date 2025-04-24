<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantas Carlinhos - Pedidos</title>
    <link rel="stylesheet" href="css/pedidos.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Jacques+Francois&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="app-container">
        <aside class="sidebar">
            <div class="logo-container">
                <div class="logo-icon">
                    <img src="assets/logoplanta.svg" class="logo-inner">
                </div>
                <div class="logo-text">Plantas Carlinhos</div>
            </div>

            <nav class="menu">
                <div class="menu-section">
                    <div class="menu-item">
                        <div class="menu-icon">
                            <img src="assets/produtos.svg" class="products-icon">
                        </div>
                        <a href="gerenciamento.php" style="text-decoration: none;">
                            <div class="menu-text">Produtos</div>
                        </a>
                    </div>
                    <div class="menu-item active">
                        <div class="menu-icon">
                            <img src="assets/pedido.svg" class="orders-icon">
                        </div>
                        <div class="menu-text">Pedidos</div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-icon">
                            <img src="assets/configuracao.svg" class="settings-icon">
                        </div>
                        <div class="menu-text">Configurações</div>
                    </div>
                </div>

                <div class="menu-item logout">
                    <div class="menu-icon">
                        <img src="assets/log out.svg" class="logout-icon">
                    </div>
                    <a href="admin.php" style="text-decoration: none;" class="menu-text">
                        Log Out
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Conteúdo Principal -->
        <main class="main-content">
            <!-- Cabeçalho -->
            <header class="content-header">
                <div class="header-content">
                    <div class="breadcrumb">
                        <span class="breadcrumb-item">Pedidos</span>
                        <span class="breadcrumb-separator">></span>
                        <span class="breadcrumb-active">Todos os pedidos</span>
                    </div>
                    <div class="header-actions">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Buscar pedidos...">
                        </div>
                        <button class="filter-button">
                            <i class="fas fa-filter"></i>
                            <span>Filtrar</span>
                        </button>
                        <button class="export-button">
                            <i class="fas fa-file-export"></i>
                            <span>Exportar</span>
                        </button>
                    </div>
                </div>
                <div class="summary-cards">
                    <div class="summary-card">
                        <div class="card-value">8</div>
                        <div class="card-label">Total de Pedidos</div>
                    </div>
                    <div class="summary-card">
                        <div class="card-value">3</div>
                        <div class="card-label">Em Andamento</div>
                    </div>
                    <div class="summary-card">
                        <div class="card-value">R$ 768.232,00</div>
                        <div class="card-label">Valor Total</div>
                    </div>
                </div>
            </header>

            <!-- Tabela de Pedidos -->
            <div class="orders-container">
                <div class="table-responsive">
                    <table class="orders-table">
                        <thead>
                            <tr>
                                <th class="sortable">Data <i class="fas fa-sort"></i></th>
                                <th>Ordem de Compra</th>
                                <th>Comprador</th>
                                <th>Data de Entrega</th>
                                <th>Status</th>
                                <th class="text-right">Valor</th>
                                <th class="actions">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>06/02/15</td>
                                <td>PO-00123456</td>
                                <td>MasterCard</td>
                                <td>07/15/15</td>
                                <td><span class="status-badge draft">Rascunho</span></td>
                                <td class="text-right">R$ 535.007,00</td>
                                <td class="actions">
                                    <button class="action-btn view"><i class="fas fa-eye"></i></button>
                                    <button class="action-btn edit"><i class="fas fa-pencil-alt"></i></button>
                                </td>
                            </tr>
                            <!-- Linhas restantes da tabela -->
                        </tbody>
                    </table>
                </div>
                
                <!-- Paginação -->
                <div class="pagination">
                    <button class="pagination-btn disabled"><i class="fas fa-chevron-left"></i></button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <button class="pagination-btn"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>