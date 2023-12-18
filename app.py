from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)


employees = [
    {"id": 1, "name": "John Doe", "position": "Software Engineer"},
    {"id": 2, "name": "Jane Smith", "position": "HR Manager"}

]


@app.route('/')
def home():
    return render_template('home.html')


@app.route('/employees')
def employee_list():
    return render_template('employee_list.html', employees=employees)


@app.route("/add-employee", methods=['GET', 'POST'])
def add_employee():
    if request.method == 'POST':
        name = request.form.get('name')
        position = request.form.get('position')

        new_employee = {"id": len(employees) + 1,
                        "name": name, "position": position}
        employees.append(new_employee)

        return redirect(url_for('employee_list'))

    return render_template("add_employee.html")


if __name__ == '__main__':
    app.run(debug=True)
