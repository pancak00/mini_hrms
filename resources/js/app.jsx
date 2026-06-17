import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route, Link } from 'react-router-dom';

import Dashboard from './components/Dashboard';
import Employees from './components/Employees';
import Salaries from './components/Salaries';
import Attendance from './components/Attendance';

function App() {
    return (
        <Router>
            <nav className="bg-gray-800 p-4 text-white flex gap-4">
                <Link to="/">Dashboard</Link>
                <Link to="/employees">Employees</Link>
                <Link to="/salaries">Salaries</Link>
                <Link to="/attendance">Attendance</Link>
            </nav>

            <div className="p-6">
                <Routes>
                    <Route path="/" element={<Dashboard />} />
                    <Route path="/employees" element={<Employees />} />
                    <Route path="/salaries" element={<Salaries />} />
                    <Route path="/attendance" element={<Attendance />} />
                </Routes>
            </div>
        </Router>
    );
}

const root = createRoot(document.getElementById('app'));
root.render(<App />);
