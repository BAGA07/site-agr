<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Définir les colonnes qui peuvent être massivement assignées
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image_path',
        
    ];

    // Relation avec le modèle Category (Un produit appartient à une catégorie)
   

    // Exemple de méthode pour vérifier si un produit est en stock
    public function isInStock()
    {
        return $this->stock > 0;
    }

    // Accesseur pour afficher le prix formaté
    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 2) . ' €';
    }

    // Exemple de méthode pour réduire le stock après une commande
    public function reduceStock($quantity)
    {
        if ($this->stock >= $quantity) {
            $this->stock -= $quantity;
            $this->save();
        }
    }

     public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}