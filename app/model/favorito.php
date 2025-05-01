<?php

/**
 * Esta clase define los datos de un producto favorito
 * Almacena información sobre un producto que un usuario ha guardado en favoritos
 *
 * @package emporioNostalgico
 * 
 */
class FavoritoUsuario {
    /**
     * @var int $idFavorito ID del favorito en la base de datos.
     */
    private $idFavorito;

    /**
     * @var int $idUsuario ID del usuario que ha marcado el producto como favorito.
     */
    private $idUsuario;

    /**
     * @var int $idProducto ID del producto que el usuario ha marcado como favorito.
     */
    private $idProducto;

    /**
     * @var int $cantidadFavoritos es la cantidad de productos que el usuario ha marcado como favoritos.
     */
    private $cantidadFavoritos;

    /**
     * Este es el constructor de la clase FavoritoUsuario, 
     * crea un objeto que tiene como parámetros los valores del producto, usuario y favorito.
     * 
     * @param int $idFavorito ID del favorito.
     * @param int $idUsuario ID del usuario que marca el producto como favorito.
     * @param int $idProducto ID del producto favorito.
     * @param int $cantidadFavoritos Cantidad de productos favoritos.
     */
    public function __construct($idFavorito, $idUsuario, $idProducto, $cantidadFavoritos) {
        $this->idFavorito = $idFavorito;
        $this->idUsuario = $idUsuario;
        $this->idProducto = $idProducto;
        $this->cantidadFavoritos = $cantidadFavoritos;  
    }

    /**
     * Esta función obtiene el ID del favorito.
     *
     * @return int El ID del favorito.
     */
    public function getIdFavorito() {
        return $this->idFavorito;
    }

    /**
     * Esta función establece el ID del favorito.
     *
     * @param int $idFavorito El nuevo ID del favorito.
     * 
     * @return void
     */
    public function setIdFavorito($idFavorito) {
        $this->idFavorito = $idFavorito;
    }

    public function getIdUsuario($idUsuario) {
        return $this->idUsuario;
    }

    /**
     * Esta función establece el ID del favorito.
     *
     * @param int $idFavorito El nuevo ID del favorito.
     * 
     * @return void
     */
    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    /**
     * Esta función obtiene el ID del producto que se ha guardado en favoritos.
     *
     * @return int El ID del producto.
     */
    public function getIdProducto() {
        return $this->idProducto;
    }

    /**
     * Esta función establece el ID del producto marcado como favorito.
     *
     * @param int $idProducto El nuevo ID del producto.
     * 
     * @return void
     */
    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    /**
     * Esta función obtiene la cantidad de productos favoritos.
     *
     * @return int La cantidad de favoritos.
     */
    public function getCantidadFavoritos() {
        return $this->cantidadFavoritos;
    }

    /**
     * Esta función establece la cantidad de productos marcados como favoritos.
     *
     * @param int $cantidadFavoritos La nueva cantidad de favoritos.
     * 
     * @return void
     */
    public function setCantidadFavoritos($cantidadFavoritos) {
        $this->cantidadFavoritos = $cantidadFavoritos;
    }
}
?>
