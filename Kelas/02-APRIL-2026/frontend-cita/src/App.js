import { useState, useEffect } from "react";
import "bootstrap/dist/css/bootstrap.min.css";

function App() {
  const [page, setPage] = useState("login");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const [nama, setNama] = useState("");
  const [cita, setCita] = useState("");
  const [data, setData] = useState([]);


  const handleLogin = async () => {
    const res = await fetch("http://127.0.0.1:8000/api/login", {
      method: "POST",
      headers: {"Content-Type": "application/json"},
      body: JSON.stringify({ email, password }),
    });

    const result = await res.json();

    if (result.status === "success") {
      setPage("home");
      getData();
    } else {
      alert("Login gagal");
    }
  };

  const simpanCita = async () => {
    await fetch("http://127.0.0.1:8000/api/cita", {
      method: "POST",
      headers: {"Content-Type": "application/json"},
      body: JSON.stringify({ nama, cita_cita: cita }),
    });

    alert("Berhasil disimpan");
    getData();
  };

  const getData = async () => {
    const res = await fetch("http://127.0.0.1:8000/api/cita");
    const result = await res.json();
    setData(result);
  };

  const logout = () => {
    setPage("login");
  };

  const handleDelete = async (id) => {
    await fetch(`http://127.0.0.1:8000/api/cita/${id}`, {
      method: "DELETE",
    });

    getData(); // refresh data
  };

  const handleUpdate = async (id) => {
  const namaBaru = prompt("Masukkan nama baru:");
  const citaBaru = prompt("Masukkan cita-cita baru:");

    await fetch(`http://127.0.0.1:8000/api/cita/${id}`, {
      method: "PUT",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        nama: namaBaru,
        cita_cita: citaBaru,
      }),
    });

    getData();
  };

  useEffect(() => {
    if (page === "home") {
      getData();
    }
  }, [page]);

  if (page === "login") {
    return (
      <div className="container d-flex vh-100 justify-content-center align-items-center">
        <div className="card p-4 shadow" style={{ width: 350 }}>
          <h3 className="text-center">Login</h3>
          <input className="form-control my-2" placeholder="Email" onChange={e=>setEmail(e.target.value)} />
          <input className="form-control my-2" type="password" placeholder="Password" onChange={e=>setPassword(e.target.value)} />
          <button className="btn btn-primary w-100" onClick={handleLogin}>Login</button>
        </div>
      </div>
    );
  }

  return (
    <div className="container mt-5">
      <h2>🎯 Cita-Cita Saya</h2>

      <button className="btn btn-danger mb-3" onClick={logout}>Logout</button>

      <div className="card p-3 mb-3">
        <input className="form-control my-2" placeholder="Nama" onChange={e=>setNama(e.target.value)} />
        <input className="form-control my-2" placeholder="Cita-cita" onChange={e=>setCita(e.target.value)} />
        <button className="btn btn-success" onClick={simpanCita}>Simpan</button>
      </div>

      <ul className="list-group">
        {data.map((item, index) => (
          <li key={index} className="list-group-item d-flex justify-content-between">
            <span>{item.nama} - {item.cita_cita}</span>

            <div>
              <button 
                onClick={() => handleUpdate(item.id)} 
                className="btn btn-warning me-2"
              >
                Edit
              </button>

              <button 
                onClick={() => handleDelete(item.id)} 
                className="btn btn-danger"
              >
                Delete
              </button>
            </div>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default App;