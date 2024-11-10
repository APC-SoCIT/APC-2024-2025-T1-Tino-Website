<div class="subscribe-section">
   <p>Be the first to know about new products and sales</p>
   <form action="{{ route('subscribe') }}" method="POST">
       @csrf
       <input name="email" placeholder="Enter Your Email Address" type="email" required/>
       <button type="submit">Subscribe</button>
   </form>
</div>

<footer>
   <div>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('gallery') }}">Gallery</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('map') }}">Map</a>
   </div>

   <div class="logo">
    <img alt="Logo T" src="{{ asset('monogram.png') }}" style="height: 50px;"/>
   </div>

   <div class="social-icons">
    <a href="https://www.facebook.com/tinosuits" target="_blank">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://www.instagram.com/tino.suits/" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>
</div>

   <div class="payment-methods">
    <img alt="PayPal logo" height="50" src="https://storage.googleapis.com/a1aa/image/GfBCqFNeekE3eSXJyrHH3rCf5sffwKZBlPh1uVpd912Q0ofsTA.jpg" width="50"/>
   </div>
</footer>