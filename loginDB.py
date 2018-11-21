import pymongo
client = pymongo.MongoClient("mongodb://localhost:27017/")
db = client("myDB")
collection = db["login"]

userName= input("Enter Username: ")
pass=input("Enter Password: ")
for a in collection.find({},{"user_name":1,"password":1}):
	name=str(a["user_name"])
	password=str(a["password"])
if userName==name and pass==password:
	print("Login Success!!!")
else:
	print("Login Failed!!!")