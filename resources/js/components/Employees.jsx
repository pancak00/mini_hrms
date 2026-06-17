import {useEffect, useState} from 'react';

export default function Employees() {
    const [employees, setEmployees] = useState([]);
    const [form, setForm] = useState({ name: '', email: '', position: '' });

    //load employees
    useEffect(() => {
        fetch('/api/employees')
            .then(res => res.json())
            .then(data => setEmployees(data));
    }, []);

    const handleChange = (e) => {
        setForm({ ...form, [e.target.name]: e.target.value });
    };

    const addEmployee = (e) => {
        e.preventDefault();
        fetch('/api/employees', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(form)
        })
        .then(res => res.json())
        .then(newEmp => setEmployees([...employees, newEmp]));
    };

        const deleteEmployee = (id) => {
            fetch(`/api/employees/${id}`, {method: 'DELETE'})
            .then(() => setEmployees(employees.filter(emp => emp.id !== id)));
        };

        return (
            <div>
                <h2 className="text-2xl font-bold mb-4">Employees</h2>

                {/* Add Employee Form */}
                <form onSubmit={addEmployee} className="mb-4">
                    <input name="name" placeholder="Name" onChange={handleChange} />
                    <input name="email" placeholder="Email" onChange={handleChange} />
                    <input name="position" placeholder="Position" onChange={handleChange} />
                    <button type="submit">Add Employee</button>
                </form>

                {/* Employee Table */}
                <table className="table-auto w-full border">
                    <thead>
                        <tr>
                            <th className="border px-4 py-2">ID</th>
                            <th className="border px-4 py-2">Name</th>
                            <th className="border px-4 py-2">Email</th>
                            <th className="border px-4 py-2">Position</th>
                            <th className="border px-4 py-2">Actions</th>
                        </tr>
                    </thead>

                <tbody>
                    {employees.map(emp => (
                        <tr key={emp.id}>
                            <td className="border px-4 py-2">{emp.id}</td>
                            <td className="border px-4 py-2">{emp.name}</td>
                            <td className="border px-4 py-2">{emp.email}</td>
                            <td className="border px-4 py-2">{emp.position}</td>
                            <td className="border px-4 py-2">
                                <button onClick={() => deleteEmployee(emp.id)}>Delete</button>
                            </td>
                        </tr>
                    ))}
                </tbody>
                </table>    
            </div>
        );
}