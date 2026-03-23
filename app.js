/**
 * Fashion Fit - Main JavaScript
 * Handles cart management, product display, and interactions
 */

// Product Data
const products = [
  // Women's Wear
  {
    id: '1',
    name: 'Classic Denim Jacket',
    price: 89.99,
    category: 'womens',
    image: 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=800',
    description: 'Timeless denim jacket with a modern fit. Perfect for layering and everyday wear. Made from premium quality denim.',
    sizes: ['XS', 'S', 'M', 'L', 'XL'],
    featured: true,
    images: [
      'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=800',
      'https://images.unsplash.com/photo-1578587018452-892bacefd3f2?w=800',
    ]
  },
  {
    id: '2',
    name: 'Floral Summer Dress',
    price: 69.99,
    category: 'womens',
    image: 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=800',
    description: 'Beautiful floral print dress perfect for summer days. Lightweight and comfortable fabric with a flattering silhouette.',
    sizes: ['XS', 'S', 'M', 'L', 'XL'],
    featured: true,
    images: ['https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=800']
  },
  {
    id: '3',
    name: 'Leather Ankle Boots',
    price: 129.99,
    category: 'womens',
    image: 'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=800',
    description: 'Premium leather ankle boots with a sleek design. Comfortable for all-day wear with a stylish heel.',
    sizes: ['6', '7', '8', '9', '10'],
    featured: true,
    images: ['https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=800']
  },
  {
    id: '4',
    name: 'Elegant Black Dress',
    price: 99.99,
    category: 'womens',
    image: 'https://images.unsplash.com/photo-1566174053879-31528523f8ae?w=800',
    description: 'Sophisticated black dress suitable for any occasion. Classic cut with modern details.',
    sizes: ['XS', 'S', 'M', 'L', 'XL'],
    featured: false,
    images: ['https://images.unsplash.com/photo-1566174053879-31528523f8ae?w=800']
  },
  
  // Men's Wear
  {
    id: '5',
    name: 'Premium Leather Jacket',
    price: 249.99,
    category: 'mens',
    image: 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=800',
    description: 'High-quality genuine leather jacket with a timeless design. Perfect for any season.',
    sizes: ['S', 'M', 'L', 'XL', 'XXL'],
    featured: true,
    images: ['https://images.unsplash.com/photo-1551028719-00167b16eac5?w=800']
  },
  {
    id: '6',
    name: 'Classic White T-Shirt',
    price: 29.99,
    category: 'mens',
    image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800',
    description: 'Essential wardrobe staple. Premium cotton white t-shirt with a perfect fit.',
    sizes: ['S', 'M', 'L', 'XL', 'XXL'],
    featured: true,
    images: ['https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800']
  },
  {
    id: '7',
    name: 'Slim Fit Jeans',
    price: 79.99,
    category: 'mens',
    image: 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=800',
    description: 'Modern slim fit jeans with stretch for comfort. Classic dark wash that goes with everything.',
    sizes: ['28', '30', '32', '34', '36', '38'],
    featured: true,
    images: ['https://images.unsplash.com/photo-1542272604-787c3835535d?w=800']
  },
  {
    id: '8',
    name: 'Casual Blazer',
    price: 149.99,
    category: 'mens',
    image: 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=800',
    description: 'Versatile blazer suitable for work or casual outings. Tailored fit with quality construction.',
    sizes: ['S', 'M', 'L', 'XL', 'XXL'],
    featured: false,
    images: ['https://images.unsplash.com/photo-1507679799987-c73779587ccf?w=800']
  },

  // Accessories
  {
    id: '9',
    name: 'Designer Sunglasses',
    price: 89.99,
    category: 'accessories',
    image: 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=800',
    description: 'Stylish sunglasses with UV protection. Modern design that complements any outfit.',
    featured: true,
    images: ['https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=800']
  },
  {
    id: '10',
    name: 'Leather Belt',
    price: 49.99,
    category: 'accessories',
    image: 'https://images.unsplash.com/photo-1624222247344-550fb60583c2?w=800',
    description: 'Premium leather belt with classic buckle. Essential accessory for any wardrobe.',
    sizes: ['S', 'M', 'L', 'XL'],
    featured: true,
    images: ['https://images.unsplash.com/photo-1624222247344-550fb60583c2?w=800']
  },
  {
    id: '11',
    name: 'Designer Handbag',
    price: 179.99,
    category: 'accessories',
    image: 'https://images.unsplash.com/photo-1564422170194-896b89110ef8?w=800',
    description: 'Elegant handbag with multiple compartments. Perfect size for daily use.',
    featured: true,
    images: ['https://images.unsplash.com/photo-1564422170194-896b89110ef8?w=800']
  },
  {
    id: '12',
    name: 'Wrist Watch',
    price: 199.99,
    category: 'accessories',
    image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800',
    description: 'Sophisticated timepiece with minimalist design. Water-resistant and built to last.',
    featured: false,
    images: ['https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=800']
  },
];

// Cart Management
class CartManager {
  constructor() {
    this.cart = this.loadCart();
    this.updateCartCount();
  }

  loadCart() {
    const cartData = localStorage.getItem('fashionfit_cart');
    return cartData ? JSON.parse(cartData) : [];
  }

  saveCart() {
    localStorage.setItem('fashionfit_cart', JSON.stringify(this.cart));
    this.updateCartCount();
  }

  addToCart(productId, size = null, quantity = 1) {
    const product = products.find(p => p.id === productId);
    if (!product) return;

    const existingItem = this.cart.find(item => 
      item.id === productId && item.size === size
    );

    if (existingItem) {
      existingItem.quantity += quantity;
    } else {
      this.cart.push({
        id: productId,
        name: product.name,
        price: product.price,
        image: product.image,
        category: product.category,
        size: size,
        quantity: quantity
      });
    }

    this.saveCart();
    this.showNotification('Product added to cart!');
  }

  removeFromCart(productId, size) {
    this.cart = this.cart.filter(item => 
      !(item.id === productId && item.size === size)
    );
    this.saveCart();
  }

  updateQuantity(productId, size, quantity) {
    const item = this.cart.find(i => i.id === productId && i.size === size);
    if (item) {
      item.quantity = Math.max(1, quantity);
      this.saveCart();
    }
  }

  getCart() {
    return this.cart;
  }

  getTotal() {
    return this.cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
  }

  getItemCount() {
    return this.cart.reduce((sum, item) => sum + item.quantity, 0);
  }

  clearCart() {
    this.cart = [];
    this.saveCart();
  }

  updateCartCount() {
    const countElement = document.querySelector('.cart-count');
    if (countElement) {
      const count = this.getItemCount();
      countElement.textContent = count;
      countElement.style.display = count > 0 ? 'flex' : 'none';
    }
  }

  showNotification(message) {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.textContent = message;
    notification.style.cssText = `
      position: fixed;
      top: 100px;
      right: 20px;
      background: #10b981;
      color: white;
      padding: 1rem 2rem;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      z-index: 10000;
      animation: slideIn 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
      notification.style.animation = 'slideOut 0.3s ease';
      setTimeout(() => notification.remove(), 300);
    }, 2000);
  }
}

// Initialize cart manager
const cartManager = new CartManager();

// Navigation Active State
function setActiveNav() {
  const currentPage = window.location.pathname.split('/').pop() || 'index.html';
  const navLinks = document.querySelectorAll('.nav-links a');
  
  navLinks.forEach(link => {
    const linkPage = link.getAttribute('href');
    if (linkPage === currentPage || 
        (currentPage === '' && linkPage === 'index.html') ||
        (currentPage === 'index.html' && linkPage === 'index.html')) {
      link.classList.add('active');
    }
  });
}

// Get URL Parameters
function getUrlParameter(name) {
  const params = new URLSearchParams(window.location.search);
  return params.get(name);
}

// Format Price
function formatPrice(price) {
  return `$${price.toFixed(2)}`;
}

// Render Product Card
function renderProductCard(product) {
  return `
    <div class="product-card">
      <a href="product.html?id=${product.id}">
        <div class="product-image-wrapper">
          <img src="${product.image}" alt="${product.name}" class="product-image">
        </div>
      </a>
      <div class="product-info">
        <div class="product-category">${product.category.replace('-', ' ')}</div>
        <h3 class="product-name">${product.name}</h3>
        <div class="product-price">${formatPrice(product.price)}</div>
        <button class="add-to-cart-btn" onclick="addToCartFromCard('${product.id}')">
          Add to Cart
        </button>
      </div>
    </div>
  `;
}

// Add to cart from product card (without size)
function addToCartFromCard(productId) {
  const product = products.find(p => p.id === productId);
  if (product && product.sizes && product.sizes.length > 0) {
    // Redirect to product detail page if sizes available
    window.location.href = `product.html?id=${productId}`;
  } else {
    cartManager.addToCart(productId, null, 1);
  }
}

// Filter Products
function filterProducts(category = 'all', priceRange = 'all') {
  let filtered = [...products];
  
  if (category !== 'all') {
    filtered = filtered.filter(p => p.category === category);
  }
  
  if (priceRange !== 'all') {
    const ranges = {
      'under-50': [0, 50],
      '50-100': [50, 100],
      '100-200': [100, 200],
      'over-200': [200, Infinity]
    };
    const [min, max] = ranges[priceRange];
    filtered = filtered.filter(p => p.price >= min && p.price < max);
  }
  
  return filtered;
}

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
  setActiveNav();
  cartManager.updateCartCount();
  
  // Add CSS for notifications
  if (!document.getElementById('notification-styles')) {
    const style = document.createElement('style');
    style.id = 'notification-styles';
    style.textContent = `
      @keyframes slideIn {
        from {
          transform: translateX(100%);
          opacity: 0;
        }
        to {
          transform: translateX(0);
          opacity: 1;
        }
      }
      @keyframes slideOut {
        from {
          transform: translateX(0);
          opacity: 1;
        }
        to {
          transform: translateX(100%);
          opacity: 0;
        }
      }
    `;
    document.head.appendChild(style);
  }
});
