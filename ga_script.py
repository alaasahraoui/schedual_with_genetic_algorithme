mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="test"
)
my_rooms_cursor = mydb.cursor()
my_rooms_cursor.execute("SELECT room_code,room_max FROM rooms")
my_rooms_list= my_rooms_cursor.fetchall()



my_enseignants_cursor=mydb.cursor()
my_enseignants_cursor.execute("SELECT code_ens,nom_ens FROM enseignants")
my_enseignants_list= my_rooms_cursor.fetchall()



