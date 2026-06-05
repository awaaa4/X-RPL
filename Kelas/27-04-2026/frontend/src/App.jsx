import React, { useState, useEffect } from 'react';
import {
  Gamepad2,
  Youtube,
  Sparkles,
  Flame,
  Calendar,
  Award,
  Layers,
  Send,
  User,
  MessageSquare,
  CheckCircle,
  Database,
  MonitorPlay,
  PlayCircle
} from 'lucide-react';

export default function App() {
  const [activeTab, setActiveTab] = useState('profile');
  const [subscribers, setSubscribers] = useState(728);
  const [isSubscribed, setIsSubscribed] = useState(false);
  const [hasSubscribedClicked, setHasSubscribedClicked] = useState(false);

  // Guestbook states
  const [messages, setMessages] = useState([]);
  const [name, setName] = useState('');
  const [messageText, setMessageText] = useState('');
  const [loading, setLoading] = useState(false);
  const [status, setStatus] = useState({ type: '', text: '' });
  const [dbMode, setDbMode] = useState('demo'); // 'demo' or 'mysql'

  const backendUrl = 'http://127.0.0.1:8000/api/guestbook';

  // Live subscriber dynamic count simulator
  useEffect(() => {
    const interval = setInterval(() => {
      setSubscribers(prev => prev + (Math.random() > 0.6 ? 1 : 0));
    }, 8000);
    return () => clearInterval(interval);
  }, []);

  // Fetch guestbook messages
  const fetchMessages = async () => {
    setLoading(true);
    try {
      const response = await fetch(backendUrl);
      if (response.ok) {
        const data = await response.json();
        setMessages(data);
        setDbMode('mysql');
      } else {
        throw new Error('API server error');
      }
    } catch (error) {
      console.warn('Laravel backend not active, falling back to local storage');
      setDbMode('demo');
      const localData = JSON.parse(localStorage.getItem('tsabitah_guestbook') || '[]');
      setMessages(localData);
    } finally {
      setLoading(false);
    }
  };

  useEffect(() => {
    fetchMessages();
  }, []);

  // Handle Subscribe Button
  const handleSubscribe = () => {
    if (!isSubscribed) {
      setSubscribers(prev => prev + 1);
      setIsSubscribed(true);
      setHasSubscribedClicked(true);
      setTimeout(() => setHasSubscribedClicked(false), 3000);
    } else {
      setSubscribers(prev => prev - 1);
      setIsSubscribed(false);
    }
  };

  // Handle Form Submit
  const handleSubmit = async (e) => {
    e.preventDefault();
    if (!name.trim() || !messageText.trim()) {
      setStatus({ type: 'error', text: 'Nama dan pesan tidak boleh kosong ya!' });
      return;
    }

    setLoading(true);
    setStatus({ type: '', text: '' });

    const payload = { name, message: messageText };

    try {
      if (dbMode === 'mysql') {
        const response = await fetch(backendUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
          },
          body: JSON.stringify(payload),
        });

        if (response.ok) {
          setName('');
          setMessageText('');
          setStatus({ type: 'success', text: 'Keren! Pesan dukungamu berhasil masuk ke Database MySQL! 🎉' });
          fetchMessages(); // Refresh list
        } else {
          throw new Error('Gagal mengirim ke Laravel');
        }
      } else {
        // Fallback to LocalStorage
        const localData = JSON.parse(localStorage.getItem('tsabitah_guestbook') || '[]');
        const newMsg = {
          id: Date.now(),
          name,
          message: messageText,
          created_at: new Date().toISOString()
        };
        const updatedData = [newMsg, ...localData];
        localStorage.setItem('tsabitah_guestbook', JSON.stringify(updatedData));
        setMessages(updatedData);
        setName('');
        setMessageText('');
        setStatus({ type: 'success', text: 'Pesan berhasil disimpan di browser lokal (Mode Demo)! Jalankan Laravel & MySQL untuk menyimpannya di Database! 😉' });
      }
    } catch (err) {
      setStatus({ type: 'error', text: 'Oops! Gagal mengirim pesan ke server.' });
    } finally {
      setLoading(false);
    }
  };

  // Format date readable
  const formatDate = (dateString) => {
    const options = { year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' };
    return new Date(dateString).toLocaleDateString('id-ID', options);
  };

  return (
    <>
      <div className="stars"></div>

      <div className="container">
        {/* Header/Nav */}
        <header className="header">
          <div className="logo" onClick={() => setActiveTab('profile')}>
            <Gamepad2 size={20} color="#06b6d4" />
            SHILA<span>.GG</span>
          </div>

          <nav className="nav-links">
            <a
              href="#profile"
              className={`nav-link ${activeTab === 'profile' ? 'active' : ''}`}
              onClick={(e) => { e.preventDefault(); setActiveTab('profile'); }}
            >
              Profil
            </a>
            <a
              href="#roadmap"
              className={`nav-link ${activeTab === 'roadmap' ? 'active' : ''}`}
              onClick={(e) => { e.preventDefault(); setActiveTab('roadmap'); }}
            >
              Jalur Karir
            </a>
            <a
              href="#guestbook"
              className={`nav-link ${activeTab === 'guestbook' ? 'active' : ''}`}
              onClick={(e) => { e.preventDefault(); setActiveTab('guestbook'); }}
            >
              Dukungan Fans
            </a>
          </nav>
        </header>

        {/* Dynamic Database Connection Indicator Banner */}
        <div style={{ display: 'flex', justifyContent: 'center', marginBottom: '2.5rem' }}>
          <div className="glass-panel" style={{ padding: '0.6rem 1.2rem', borderRadius: '50px', fontSize: '0.85rem', display: 'flex', alignItems: 'center', gap: '0.5rem', borderColor: dbMode === 'mysql' ? 'rgba(16, 185, 129, 0.3)' : 'rgba(230, 150, 20, 0.3)' }}>
            <Database size={16} color={dbMode === 'mysql' ? '#10b981' : '#f59e0b'} />
            <span>
              Mode Database: {dbMode === 'mysql' ? (
                <strong style={{ color: '#10b981' }}>Terhubung dengan MySQL (Laravel) 🟢</strong>
              ) : (
                <strong style={{ color: '#f59e0b' }}>Demo Simpan Lokal (Browser) 🟡</strong>
              )}
            </span>
          </div>
        </div>

        {/* Tab 1: Profil */}
        {activeTab === 'profile' && (
          <main>
            <div className="hero glass-panel">
              <div className="hero-text">
                <h2>🎮 FUTURE STREAMER PROFILE</h2>
                <h1>Tsabitah Asilah Najwa</h1>
                <p>
                  Halo semuanya! Selamat datang di web profil masa depanku! Aku bercita-cita tinggi untuk menjadi seorang <strong>YouTuber Gaming profesional</strong> yang menghibur, kreatif, dan inspiratif. Aku ingin membagikan kebahagiaan saat bermain game dan membangun komunitas gamer yang solid di Indonesia!
                </p>
                <div className="hero-buttons">
                  <button
                    onClick={handleSubscribe}
                    className="btn btn-primary"
                    style={{ position: 'relative' }}
                  >
                    <Youtube size={18} />
                    {isSubscribed ? 'Subscribed!' : 'Subscribe'}
                    {hasSubscribedClicked && (
                      <span style={{
                        position: 'absolute',
                        top: '-20px',
                        left: '50%',
                        transform: 'translateX(-50%)',
                        background: '#ec4899',
                        color: 'white',
                        padding: '2px 8px',
                        borderRadius: '4px',
                        fontSize: '10px',
                        fontFamily: 'var(--font-gaming)'
                      }}>+1 SUB!</span>
                    )}
                  </button>
                  <button
                    onClick={() => setActiveTab('roadmap')}
                    className="btn btn-secondary"
                  >
                    Lihat Rencana Karir
                  </button>
                </div>
              </div>
              <div className="hero-avatar-container">
                <div className="hero-avatar">
                  <span className="avatar-icon">👧🏻</span>
                  <div style={{
                    position: 'absolute',
                    bottom: '-15px',
                    background: '#8b5cf6',
                    color: 'white',
                    padding: '4px 12px',
                    borderRadius: '20px',
                    fontSize: '12px',
                    fontWeight: 'bold',
                    boxShadow: 'var(--glow-shadow)'
                  }}>
                    Level 1 Creator 💎
                  </div>
                </div>
              </div>
            </div>

            {/* Sub/Stats Count Grid */}
            <div className="stats-grid">
              <div className="stat-card glass-panel">
                <h3>{subscribers.toLocaleString()}</h3>
                <p>Virtual Subscribers</p>
              </div>
              <div className="stat-card glass-panel">
                <h3>ML & Minecraft</h3>
                <p>Game Utama</p>
              </div>
              <div className="stat-card glass-panel">
                <h3>100% FUN</h3>
                <p>Niche Channel</p>
              </div>
            </div>

            {/* My Gaming Corner */}
            <section style={{ marginBottom: '5rem' }}>
              <h2 className="section-title">
                Game Yang <span>Akan Kumainkan</span> 🎯
              </h2>
              <div className="game-grid">
                <div className="game-card">
                  <div className="game-icon-box">⛏️</div>
                  <h3>Minecraft</h3>
                  <p>Membuat dunia kreatif penuh petualangan, kreasi bangunan megah, dan bermain bersama fans di Server.</p>
                </div>
                <div className="game-card">
                  <div className="game-icon-box">🛡️</div>
                  <h3>Mobile Legends</h3>
                  <p>Streaming push rank bareng penonton (Mabar), tips hero andalan, dan analisis strategi seru.</p>
                </div>
                <div className="game-card">
                  <div className="game-icon-box">🎯</div>
                  <h3>Valorant</h3>
                  <p>Mengasah reflek menembak, gameplay kompetitif yang menegangkan, serta clutch momen epic!</p>
                </div>
              </div>
            </section>
          </main>
        )}

        {/* Tab 2: Jalur Karir / Roadmap */}
        {activeTab === 'roadmap' && (
          <main>
            <section className="glass-panel" style={{ marginBottom: '5rem' }}>
              <h2 className="section-title">
                Rencana & <span>Jalur Karirku</span> 🚀
              </h2>
              <p style={{ textAlign: 'center', color: 'var(--text-secondary)', marginBottom: '3rem', maxWidth: '600px', margin: '0 auto 3rem' }}>
                Menjadi seorang YouTuber Gaming tidak instan! Berikut adalah tangga kesuksesan yang telah aku rencanakan untuk masa depanku:
              </p>

              <div className="roadmap">
                <div className="roadmap-item">
                  <div className="roadmap-dot"></div>
                  <div className="roadmap-content">
                    <div className="roadmap-step">Langkah 1 - Persiapan</div>
                    <h3>🛠️ Gear Up & Setup</h3>
                    <p>
                      Mulai menabung untuk merakit PC Gaming yang mumpuni, membeli mikrofon dengan suara jernih, dan menyusun ruangan agar kedap suara dan estetik untuk live streaming.
                    </p>
                  </div>
                </div>

                <div className="roadmap-item">
                  <div className="roadmap-dot"></div>
                  <div className="roadmap-content">
                    <div className="roadmap-step">Langkah 2 - Memulai</div>
                    <h3>🎬 First Upload & Stream</h3>
                    <p>
                      Membuat Channel YouTube dan mengunggah video pertama: *Let's Play Minecraft Survival*. Belajar dasar-dasar aplikasi editing video (seperti CapCut/Premiere) dan software OBS Studio untuk live streaming.
                    </p>
                  </div>
                </div>

                <div className="roadmap-item">
                  <div className="roadmap-dot"></div>
                  <div className="roadmap-content">
                    <div className="roadmap-step">Langkah 3 - Pertumbuhan</div>
                    <h3>👥 Komunitas & 1.000 Subs</h3>
                    <p>
                      Mulai konsisten upload seminggu 2 kali. Membuat Discord Server khusus fans bernama "Tsabitah Squad" untuk mengobrol santai dan mabar bareng, demi membangun ikatan yang erat dengan penonton.
                    </p>
                  </div>
                </div>

                <div className="roadmap-item">
                  <div className="roadmap-dot"></div>
                  <div className="roadmap-content">
                    <div className="roadmap-step">Langkah 4 - Profesional</div>
                    <h3>🏆 Pro Streamer & Kemitraan</h3>
                    <p>
                      Mencapai monetisasi YouTube, mendapatkan penghasilan dari Adsense dan Donasi (Saweria). Mulai bermitra dengan brand gaming ternama, membuat merchandise official sendiri, dan berpartisipasi di event-event game besar Indonesia!
                    </p>
                  </div>
                </div>
              </div>

              <div style={{ display: 'flex', justifyContent: 'center' }}>
                <button
                  onClick={() => setActiveTab('guestbook')}
                  className="btn btn-primary"
                >
                  Beri Dukungan untuk Rencana Ini 💜
                </button>
              </div>
            </section>
          </main>
        )}

        {/* Tab 3: Guestbook & Fans Support */}
        {activeTab === 'guestbook' && (
          <main className="guestbook-section">
            <div className="glass-panel">
              <h2 className="section-title" style={{ marginBottom: '1.5rem' }}>
                Dukungan <span>Para Fans</span> 💬
              </h2>
              <p style={{ color: 'var(--text-secondary)', textAlign: 'center', marginBottom: '2rem' }}>
                Punya pesan, saran game, atau sekadar kata-kata penyemangat untuk Tsabitah? Silakan isi form di bawah ini! Dukunganmu sangat berarti!
              </p>

              {status.text && (
                <div className={`status-toast ${status.type === 'success' ? 'status-success' : 'status-error'}`}>
                  {status.text}
                </div>
              )}

              <form onSubmit={handleSubmit}>
                <div className="form-group">
                  <label className="form-label" htmlFor="name">Nama Panggilan</label>
                  <input
                    type="text"
                    id="name"
                    className="form-control"
                    placeholder="Contoh: GamerGacor / CinaPenghibur"
                    value={name}
                    onChange={(e) => setName(e.target.value)}
                    disabled={loading}
                    required
                  />
                </div>

                <div className="form-group">
                  <label className="form-label" htmlFor="message">Pesan / Semangat</label>
                  <textarea
                    id="message"
                    className="form-control"
                    placeholder="Tulis dukunganmu di sini... Sukses selalu Kak Shila!"
                    value={messageText}
                    onChange={(e) => setMessageText(e.target.value)}
                    disabled={loading}
                    required
                  />
                </div>

                <button
                  type="submit"
                  className="btn btn-primary"
                  style={{ width: '100%', justifyContent: 'center' }}
                  disabled={loading}
                >
                  {loading ? (
                    <span className="spinner"></span>
                  ) : (
                    <>
                      <Send size={18} />
                      Kirim Pesan Dukungan
                    </>
                  )}
                </button>
              </form>

              <div style={{ marginTop: '3rem', borderTop: '1px solid rgba(255,255,255,0.05)', paddingTop: '2rem' }}>
                <h3 style={{ fontSize: '1.25rem', marginBottom: '1rem', display: 'flex', alignItems: 'center', gap: '0.5rem' }}>
                  <MessageSquare size={18} color="#8b5cf6" />
                  Pesan Dukungan Terbaru ({messages.length})
                </h3>

                {loading && messages.length === 0 ? (
                  <div style={{ display: 'flex', justifyContent: 'center', padding: '2rem' }}>
                    <span className="spinner"></span>
                  </div>
                ) : messages.length === 0 ? (
                  <p className="no-messages">Belum ada pesan dukungan nih. Jadilah yang pertama memberi semangat untuk Shila! ✨</p>
                ) : (
                  <div className="messages-list">
                    {messages.map((msg, index) => (
                      <div className="message-item" key={msg.id || index}>
                        <div className="message-header">
                          <span className="message-author">{msg.name}</span>
                          <span className="message-time">{formatDate(msg.created_at)}</span>
                        </div>
                        <div className="message-content">{msg.message}</div>
                      </div>
                    ))}
                  </div>
                )}
              </div>
            </div>
          </main>
        )}

        {/* Footer */}
        <footer className="footer">
          <p>© {new Date().getFullYear()} Tsabitah Asilah Najwa. Made with <span className="footer-heart">❤️</span> to be the next gaming YouTuber star.</p>
        </footer>
      </div>
    </>
  );
}
