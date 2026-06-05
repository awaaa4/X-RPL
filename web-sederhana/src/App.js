import React from "react";
import { BrowserRouter as Router, Routes, Route, Link } from "react-router-dom";

// Komponen pendukung: Header
function Header() {
  return (
    <header>
      <h1>Website Sederhana React</h1>
      <nav>
        <Link to="/">Home</Link>{" | "}
        <Link to="/about">About</Link>{" | "}
        <Link to="/contact">Contact</Link>
      </nav>
      <hr />
    </header>
  );
}

// Komponen pendukung: Home
function Home() {
  return (
    <section>
      <h2>Home</h2>
      <p>Selamat datang di website React sederhana.</p>
    </section>
  );
}

// Komponen pendukung: About
function About() {
  return (
    <section>
      <h2>Tentang</h2>
      <p>Ini adalah contoh projek web statis sederhana menggunakan React tanpa CSS.</p>
    </section>
  );
}

// Komponen pendukung: Contact
function Contact() {
  return (
    <section>
      <h2>Kontak</h2>
      <p>Email: contoh@email.com</p>
    </section>
  );
}

// Komponen utama
export default function App() {
  return (
    <Router>
      <Header />
      <main>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
        </Routes>
      </main>

      <footer>
        <hr />
        <p>© 2026 Website Sederhana</p>
      </footer>
    </Router>
  );
}
