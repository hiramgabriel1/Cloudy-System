from flask import Flask

# init
app = Flask(__name__)

# /test
@app.route("/test")
def test():
    return{
        "Name": "itsrustycode",
        "profession": "tester UI",
        "tester": {
            "named": "hard",
            "lasted_update": "garden"
        }
    }

# upload new users
@app.route("/add", methods=['POST'])
def uploadUsers():
    nameUser = ['hiram gabriel', "camilo"]
    return nameUser

# /upload posts 
@app.route("/uploadFiles", methods=['POST'])
def uploadFiles():
    routeFile = request.form['file']
    nameFile = request.form['name_file']
    return {
        routeFile,
        nameFile
    }

# /users TEST
@app.route("/users", methods=['GET'])
def render_users():
    return{
        "name": "hiram gabriel",
        "lastname": "gabriel",
        "years": 19,
        "profession": "developer fullstack jr",
        "projects": ["UI netflix", "SystemCloud", "IA Python"],
        "technologies": ["nodejs","python", "javascript", "reactjs", "mysql", "bootstrap", "flask"]
    }

# handle_errors
@app.errorhandler(404)
def handle_errors(e):
    return{
        "error": "route not found"
    }, 404

# run API
if __name__ == "__main__":
    app.run(debug=True)