<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/04/2019
 * Time: 11:00
 */
class Panier
{
  static function addProduct($idProduit)
  {
      if (isset( $_SESSION['panier'][$idProduit]))
  {
      $_SESSION['panier'][$idProduit]++;
  }
 else{
     $_SESSION['panier'][$idProduit] = 1;
 }
  }
    static function deleteProduct($idProduit)
    {
        unset($_SESSION['panier'][$idProduit]);
    }

    static function totalProduct()
    {
       $total = 0;
       $ids = array_keys($_SESSION['panier']);
       if(empty($ids))
       {
           $produits = '';
       }
       else{
         $produits = Product::getProductpanier($ids);
           foreach($produits as $pr)
           {
               $total += $pr['prixProduit'] * $_SESSION['panier'][$pr['idProduit']];
           }
          }
        return $total;
    }
    static function quantiteProduct()
    {
        $quant = 0;
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids))
        {
            $produits = '';
        }
        else{
            $produits = Product::getProductpanier($ids);
            foreach($produits as $pr)
            {
                $quant += $_SESSION['panier'][$pr['idProduit']];
            }
        }
        return $quant;
    }

    static function count()
    {
       return  count(array_keys($_SESSION['panier']));
    }

    static function updateProduct($qt,$idProduit)
    {
        if ($_SESSION['panier'][$idProduit] == 0)
        {
            $_SESSION['panier'][$idProduit] = 1;
        }
        else{
            $_SESSION['panier'][$idProduit] = $qt;
        }
    }
    static function viderPanier()
    {
     unset($_SESSION['panier']);
    }
}