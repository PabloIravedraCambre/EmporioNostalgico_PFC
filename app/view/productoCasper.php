<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="container py-5">
    <div class="row">
        <!-- Imágenes del producto -->
        <div class="col-md-6 mb-4">
            <div class="card">
                <img src="../view/imagenesTiendaNostalgica/producto1.jpg" class="card-img-top" alt="Producto Casper">
                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-3">
                            <img src="https://images.unsplash.com/photo-1434056886845-dac89ffe9b56?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHx3YXRjaHxlbnwwfDB8fHwxNzM0OTY1MTc4fDA&ixlib=rb-4.0.3&q=80&w=1080" class="img-thumbnail" alt="Thumbnail 1">
                        </div>
                        <div class="col-3">
                            <img src="https://images.unsplash.com/photo-1495857000853-fe46c8aefc30?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHx3YXRjaHxlbnwwfDB8fHwxNzM0OTY1MTc4fDA&ixlib=rb-4.0.3&q=80&w=1080" class="img-thumbnail" alt="Thumbnail 2">
                        </div>
                        <div class="col-3">
                            <img src="https://images.unsplash.com/photo-1451859757691-f318d641ab4d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHx3YXRjaHxlbnwwfDB8fHwxNzM0OTY1MTc4fDA&ixlib=rb-4.0.3&q=80&w=1080" class="img-thumbnail" alt="Thumbnail 3">
                        </div>
                        <div class="col-3">
                            <img src="https://images.unsplash.com/photo-1490915785914-0af2806c22b6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwzfHx3YXRjaHxlbnwwfDB8fHwxNzM0OTY1MTc4fDA&ixlib=rb-4.0.3&q=80&w=1080" class="img-thumbnail" alt="Thumbnail 4">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Detalles del producto -->
        <div class="col-md-6">
            <h1 class="h2 mb-3">Mansión de Casper</h1>
            <div class="mb-3">
                <span class="h4 me-2">29€</span>
                <span class="badge bg-danger ms-2">Ofertón!</span>
            </div>

            <div class="mb-3">
                <div class="d-flex align-items-center">
                    <div class="text-warning me-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-muted">(5 reseñas)</span>
                </div>
            </div>

            <p class="mb-4">Esta mansión hará las delicias de los más pequeños de la casa y más cuando 
                descubran que oculta recovecos y pasadizos secretos sólo accesibles para los aventureros más 
                curiosos. Su diseño es un fiel homenaje a la película
            </p>
        
            <!-- Actions -->
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Añadir al carrito</button>
                <button class="btn btn-outline-secondary" type="button">
                        <i class="far fa-heart me-2"></i>Añadir a favoritos
                    </button>
            </div>

            <!-- Additional Info -->
            <div class="mt-4">
                <div class="d-flex align-items-center mb-2">
                    <i class="fas fa-truck text-primary me-2"></i>
                    <span>Envío gratis con pedidos superiores a 50€</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <i class="fas fa-undo text-primary me-2"></i>
                    <span>30 días de reenvío</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-shield-alt text-primary me-2"></i>
                    <span>2 años de garantía</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>