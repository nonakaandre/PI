<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portal de Receitas - Descobrir</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="../css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Vitrine do Chef</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Criar Receitas</a>
        <a class="nav-link" href="#">Favoritos</a>
        <a class="nav-link" href="#">Agendar visita</a>
        <a class="nav-link" href="#">Minha receitas</a>
        <a class="nav-link" href="#" id="area">Minha área</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>

  <div class="app-screen">
    <main class="discover-layout">

      <section class="discover-hero">
        <div class="banner-container">
          <img class="discover-banner" src="../img/banner.png" alt="Portal das Receitas">
        </div>

        <div class="search-wrapper">
          <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Busque por receitas, ingredientes ou categorias..." />
          </div>
        </div>
      </section>

      <div class="discover-tabs">
        <a class="tab-item is-active" href="#">Descobrir</a>
        <a class="tab-item" href="#">Favoritos (0)</a>
      </div>

      <section class="recipe-list">
        <h3 class="section-title"><i class="fa-solid fa-arrow-trend-up"></i> Em Alta</h3>

        <div class="recipe-grid">

          <article class="recipe-card">
            <div class="recipe-card__image-container">
              <button class="favorite-pill" type="button"><i class="fa-regular fa-heart"></i></button>
              <span class="difficulty difficulty--easy">Fácil</span>
              <img class="recipe-card__image" src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=600&q=80" alt="Bolo de Chocolate">
            </div>
            <div class="recipe-card__body">
              <h3>Bolo de Chocolate</h3>
              <p>Bolo de chocolate fofinho com cobertura cremosa de brigadeiro gourmet.</p>
              <div class="recipe-meta">
                <span><i class="fa-regular fa-clock"></i> 60 min</span>
                <span><i class="fa-solid fa-users"></i> 10 porções</span>
              </div>
              <div class="recipe-stats">
                <span><i class="fa-regular fa-eye"></i> 2.340</span>
                <span><i class="fa-solid fa-heart icon-filled-red"></i> 512</span>
              </div>
            </div>
          </article>

          <article class="recipe-card">
            <div class="recipe-card__image-container">
              <button class="favorite-pill" type="button"><i class="fa-regular fa-heart"></i></button>
              <span class="difficulty difficulty--medium">Médio</span>
              <img class="recipe-card__image" src="https://images.unsplash.com/photo-1633964913295-ceb43826e7c9?auto=format&fit=crop&w=600&q=80" alt="Risoto de Cogumelos">
            </div>
            <div class="recipe-card__body">
              <h3>Risoto de Cogumelos</h3>
              <p>Um risoto cremoso, perfumado e saboroso preparado com cogumelos frescos.</p>
              <div class="recipe-meta">
                <span><i class="fa-regular fa-clock"></i> 45 min</span>
                <span><i class="fa-solid fa-users"></i> 4 porções</span>
              </div>
              <div class="recipe-stats">
                <span><i class="fa-regular fa-eye"></i> 1.203</span>
                <span><i class="fa-solid fa-heart icon-filled-red"></i> 245</span>
              </div>
            </div>
          </article>

          <article class="recipe-card">
            <div class="recipe-card__image-container">
              <button class="favorite-pill" type="button"><i class="fa-regular fa-heart"></i></button>
              <span class="difficulty difficulty--easy">Fácil</span>
              <img class="recipe-card__image" src="https://images.unsplash.com/photo-1550304943-4f24f54ddde9?auto=format&fit=crop&w=600&q=80" alt="Salada Caesar">
            </div>
            <div class="recipe-card__body">
              <h3>Salada Caesar</h3>
              <p>Salada clássica e super crocante acompanhada de molho caesar artesanal.</p>
              <div class="recipe-meta">
                <span><i class="fa-regular fa-clock"></i> 15 min</span>
                <span><i class="fa-solid fa-users"></i> 2 porções</span>
              </div>
              <div class="recipe-stats">
                <span><i class="fa-regular fa-eye"></i> 876</span>
                <span><i class="fa-solid fa-heart icon-filled-red"></i> 189</span>
              </div>
            </div>
          </article>

        </div>
      </section>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>