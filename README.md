# Fashion Fit - Complete HTML/CSS/JS eCommerce Website

A fully functional, modern eCommerce fashion website built with pure HTML, CSS, and JavaScript.

## 🌟 Features

### Core Functionality
- **Complete Shopping Cart System** with LocalStorage persistence
- **Cash on Delivery (COD)** checkout only
- **Product Management** with add to cart, quantity updates, and removal
- **Form Validation** for checkout and contact forms
- **Responsive Design** - fully mobile-friendly
- **Smooth Animations** throughout the site

### Pages Included

1. **index.html** - Home page with hero, featured products, categories
2. **shop.html** - Product listing with category and price filters
3. **product.html** - Product detail page with size/quantity selectors
4. **cart.html** - Shopping cart with quantity management
5. **checkout.html** - COD checkout with full form validation
6. **about.html** - About Us page
7. **contact.html** - Contact form with multiple contact methods
8. **terms.html** - Terms & Conditions
9. **privacy.html** - Privacy Policy

## 📁 File Structure

```
/public/
├── index.html          # Home page
├── shop.html           # Shop/Product listing
├── product.html        # Product detail
├── cart.html           # Shopping cart
├── checkout.html       # Checkout page
├── about.html          # About page
├── contact.html        # Contact page
├── terms.html          # Terms & Conditions
├── privacy.html        # Privacy Policy
├── styles.css          # Complete stylesheet
└── app.js              # JavaScript functionality
```

## 🎨 Design Features

- **Color Palette**: Clean white, black, and neutral tones
- **Typography**: Modern sans-serif fonts
- **Animations**: Smooth fade-in, scale, and hover effects
- **Icons**: Inline SVG icons throughout
- **Images**: High-quality Unsplash fashion images

## 🛠️ Technical Details

### JavaScript Features (app.js)
- **CartManager Class**: Complete cart management with LocalStorage
- **Product Data**: 12+ fashion products (clothing, accessories)
- **Filtering**: Category and price range filters
- **Form Validation**: Email, phone, ZIP code validation
- **Notifications**: Success messages for cart actions

### CSS Features (styles.css)
- **CSS Variables**: Consistent theming
- **Flexbox & Grid**: Modern layout techniques
- **Responsive Design**: Mobile-first approach
- **Animations**: Custom keyframe animations
- **Components**: Reusable card, button, form styles

## 🚀 Getting Started

1. **Open in Browser**: Simply open `index.html` in any modern web browser
2. **No Build Required**: Pure HTML/CSS/JS - no dependencies or build tools needed
3. **LocalStorage**: Cart data persists in browser localStorage

## 📱 Responsive Breakpoints

- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

## 🛒 Shopping Flow

1. Browse products on home page or shop page
2. Click product to view details
3. Select size (if applicable) and quantity
4. Add to cart
5. View cart and adjust quantities
6. Proceed to checkout
7. Fill in shipping information
8. Place order (COD)

## 📦 Product Categories

- Men's Wear
- Women's Wear
- Accessories
- New Arrivals

## 💳 Payment Method

Currently supports **Cash on Delivery (COD)** only. Customers pay in cash when the order is delivered.

## 🔒 Data Storage

All data is stored in browser localStorage:
- `fashionfit_cart` - Shopping cart items
- `fashionfit_orders` - Order history (demo)
- `fashionfit_contacts` - Contact form submissions (demo)

## 🎯 Key Features

### Product Cards
- Product image with hover zoom effect
- Product name, category, and price
- Add to Cart button
- Click to view details

### Shopping Cart
- View all cart items
- Update quantities with +/- buttons
- Remove items
- See total price
- Proceed to checkout

### Checkout Form
- Full address form with validation
- US state selector
- ZIP code validation
- Email and phone validation
- Delivery notes (optional)
- Order summary sidebar

### Filters (Shop Page)
- Category filter (All, Men's, Women's, Accessories)
- Price range filter (Under $50, $50-$100, $100-$200, Over $200)
- Dynamic product display

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## 📄 Legal Pages

Complete legal documentation included:
- Comprehensive Terms & Conditions
- Detailed Privacy Policy with CCPA compliance
- Contact information on all pages

## 🎨 Customization

### Colors
Edit CSS variables in `styles.css`:
```css
:root {
  --color-primary: #000000;
  --color-secondary: #ffffff;
  --color-accent: #4a5568;
  /* ... more colors */
}
```

### Products
Edit product array in `app.js`:
```javascript
const products = [
  {
    id: '1',
    name: 'Product Name',
    price: 99.99,
    category: 'mens',
    image: 'image-url',
    description: 'Description',
    sizes: ['S', 'M', 'L'],
    featured: true
  },
  // ... more products
];
```

## 📧 Contact Information

- **Email**: support@fashionfit.com
- **Phone**: 1-800-FASHION (1-800-327-4466)
- **Address**: 123 Fashion Avenue, New York, NY 10001

## ⚡ Performance

- No external dependencies
- Optimized images from Unsplash CDN
- Minimal JavaScript
- Fast loading times
- Smooth animations with CSS

## 🔄 Future Enhancements

Potential additions:
- User authentication
- Backend API integration
- Payment gateway integration
- Product reviews and ratings
- Wishlist functionality
- Order tracking
- Email notifications

## 📝 License

This is a demo project for Fashion Fit eCommerce website.

## 🙏 Credits

- Images: Unsplash
- Icons: Custom SVG icons
- Fonts: System fonts for optimal performance

---

**Last Updated**: February 9, 2026
**Version**: 1.0.0
