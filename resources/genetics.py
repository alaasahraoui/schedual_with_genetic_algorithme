import mysql.connector
    
    
mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="test"
)
db_req2= mydb.cursor()
db_req2.execute("select * from enseignants")
enss=db_req2.fetchall()


db_req= mydb.cursor()
db_req.execute("DELETE from generation_scheduals")


db_req= mydb.cursor()
db_req.execute("DELETE from generations")


db_req= mydb.cursor()
db_req.execute("DELETE from scheduals")





import prettytable
import random as rnd






POPULATION_SIZE = 100




NUMB_OF_ELITE_SCHEDULES = 5
TOURNAMENT_SELECTION_SIZE = 50
MUTATION_RATE = 0.1


matin=['Se1', 'Se2' ,'Se3',  'Se6', 'Se7', 'Se8' , 'Se11', 'Se12' ,'Se13' , 'Se16' ,'Se17' ,'Se18' ,'Se21','Se22','Se23']
apres_midi=['Se4','Se5' ,'Se9', 'Se10', 'Se14', 'Se15', 'Se19', 'Se20', 'Se24' ,'Se25']

 


jour1=['Se1','Se2' ,'Se3','Se4','Se5' ]
jour2=['Se6','Se7', 'Se8','Se9','Se10' ]
jour3=['Se11','Se12' ,'Se13''Se14','Se15']
jour4=['Se16','Se17' ,'Se18','Se19','Se20']
jour5=['Se21','Se22','Se23','Se24' ,'Se25']
jours=[jour1,jour2,jour3,jour4,jour5]


specialites=['Siq','L2','isil']
sections=['s1','s2']

class DBMgr:
    def __init__(self):

        self._c =  db_req= mydb.cursor()
        self._rooms = self.select_rooms()
        self._meetingTimes = self.select_meeting_times()
        self._instructors = self.select_instructors()
        self._courses = self.select_courses()
        self._depts = self.select_depts()
        self._numberOfClasses = 0
        for i in range(0, len(self._depts)):
            self._numberOfClasses += len(self._depts[i].get_courses())
    def select_rooms(self):
        self._c.execute("SELECT * FROM rooms")
        rooms = self._c.fetchall()
        returnRooms = []
        for i in range(0, len(rooms)):
            returnRooms.append(Room(rooms[i][0], rooms[i][1]))
        return returnRooms
    def select_meeting_times(self):
        self._c.execute("SELECT * FROM seances")
        meetingTimes = self._c.fetchall()
        returnMeetingTimes = []
        for i in range(0, len(meetingTimes)):
            returnMeetingTimes.append(MeetingTime(meetingTimes[i][0], meetingTimes[i][1]))
        return returnMeetingTimes
    def select_instructors(self):
        self._c.execute("SELECT * FROM enseignants")
        instructors = self._c.fetchall()
        returnInstructors = []
        for i in range(0, len(instructors)):
            returnInstructors.append(Instructor(instructors[i][0], instructors[i][1]))
        return returnInstructors
    def select_courses(self):
        self._c.execute("SELECT * FROM courses")
        courses = self._c.fetchall()
        returnCourses = []
        for i in range(0, len(courses)):
            returnCourses.append(
                Course(courses[i][0], courses[i][1], self.select_course_instructors(courses[i][0]), courses[i][2],courses[i][3],courses[i][4],courses[i][5],courses[i][6],courses[i][7]))
        return returnCourses
    def select_depts(self):
        self._c.execute("SELECT *FROM departements")
        depts = self._c.fetchall()
        returnDepts = []
        for i in range(0, len(depts)):
            returnDepts.append(Department(depts[i][0], self.select_dept_courses(depts[i][0])))
        return returnDepts
    def select_course_instructors(self, courseNumber):
        self._c.execute("SELECT course_code ,ens_code FROM course_enseignants where course_code = '" + courseNumber + "'")
        dbInstructorNumbers = self._c.fetchall()
        instructorNumbers = []
        for i in range(0, len(dbInstructorNumbers)):
            instructorNumbers.append(dbInstructorNumbers[i][1])
        returnValue = []
        for i in range(0, len(self._instructors)):
           if  self._instructors[i].get_id() in instructorNumbers:
               returnValue.append(self._instructors[i])
        return returnValue
    def select_dept_courses(self, deptName):
        self._c.execute("SELECT * FROM departement_courses where dep_nom = '" + deptName + "'")
        dbCourseNumbers = self._c.fetchall()
        courseNumbers = []
        for i in range(0, len(dbCourseNumbers)):
            courseNumbers.append(dbCourseNumbers[i][1])
        returnValue = []
        for i in range(0, len(self._courses)):
           if self._courses[i].get_number() in courseNumbers:
               returnValue.append(self._courses[i])
        return returnValue
    def get_rooms(self): return self._rooms
    def get_instructors(self): return self._instructors
    def get_courses(self): return self._courses
    def get_depts(self): return self._depts
    def get_meetingTimes(self): return self._meetingTimes
    def get_numberOfClasses(self): return self._numberOfClasses
class Schedule:
    def __init__(self):
        self._data = data
        self._classes = []
        self._numbOfConflicts = 0
        self._fitness = -1
        self._classNumb = 0
        self._isFitnessChanged = True
    def get_classes(self):
        self._isFitnessChanged = True
        return self._classes
    def get_numbOfConflicts(self): return self._numbOfConflicts
    def get_fitness(self):
        if (self._isFitnessChanged == True):
            self._fitness = self.calculate_fitness()
            self._isFitnessChanged = False
        return self._fitness
    def initialize(self):
        depts = self._data.get_depts()
        for i in range(0, len(depts)):
            courses = depts[i].get_courses()
            for j in range(0, len(courses)):
                newClass = Class(self._classNumb, depts[i], courses[j])
                self._classNumb += 1
                newClass.set_meetingTime(data.get_meetingTimes()[rnd.randrange(0, len(data.get_meetingTimes()))])
                newClass.set_room(data.get_rooms()[rnd.randrange(0, len(data.get_rooms()))])
                newClass.set_instructor(courses[j].get_instructors()[rnd.randrange(0, len(courses[j].get_instructors()))])
                
                self._classes.append(newClass)
        return self
    def calculate_fitness(self):
        self._numbOfConflicts = 0
        classes = self.get_classes()

           
            #contraint 2 cour max par jour pour chque section de chque specialite
        for jour in jours:
            cpt=0
            for i in range(0, len(classes)):
                for specialite in specialites:
                    for section in sections:
                        if(classes[i].get_course().get_specialite()==specialite and classes[i].get_course().get_section()==section):
                            for seance in jour:
                                if(classes[i].get_meetingTime().get_id()==seance and classes[i].get_course().get_typeCour()=='cour'):
                                    
                                    cpt+=1
                                    if(cpt>2):self._numbOfConflicts += 0.1
                            #fin
                            
                            
            #contraint 4 cour max par seance jour pour chque section de chque specialite
       # for jour in jours:
          #  cpt=0
          #  for i in range(0, len(classes)):
           #     for specialite in specialites:
            #        for section in sections:
             #           if(classes[i].get_course().get_specialite()==specialite and classes[i].get_course().get_section()==section):
              #              for seance in jour:
               #                 if(classes[i].get_meetingTime().get_id()==seance ):
                #                    cpt+=1
                 #                   if(cpt>4):self._numbOfConflicts += 0.25
                            #fin                            
                            
        
        
        for i in range(0, len(classes)):
            if (classes[i].get_room().get_seatingCapacity() < classes[i].get_course().get_maxNumbOfStudents()):
                self._numbOfConflicts += 1
          
 
                         

          
                    
 
 
                
                
            #contraint: cour/td fondamental matin seulment 
            if (classes[i].get_meetingTime().get_id() not in matin and classes[i].get_course().get_fondamental()=="oui"):
                self._numbOfConflicts += 0.1            
            
            
        

            
            
            
            
            
            
            
            
            for j in range(0, len(classes)):
                 
                if (j >= i):
                
                    if (classes[i].get_meetingTime() == classes[j].get_meetingTime() and
                    classes[i].get_id() != classes[j].get_id()):
                        if (classes[i].get_room() == classes[j].get_room()): self._numbOfConflicts += 1
                        if (classes[i].get_instructor() == classes[j].get_instructor()): self._numbOfConflicts += 1
                            
                            
                        
                        if(classes[i].get_course().get_specialite()==classes[j].get_course().get_specialite()):
                            if(classes[i].get_course().get_section()==classes[j].get_course().get_section()):
                                if(  (classes[i].get_course().get_typeCour()=='td' and classes[j].get_course().get_typeCour()=='td')):
                                    if(  (classes[i].get_course().get_groupe()==classes[j].get_course().get_groupe())):
                                        self._numbOfConflicts += 1
                                
                                
                                if(    (classes[i].get_course().get_typeCour()=='cour' and classes[j].get_course().get_typeCour()=='td') or (classes[i].get_course().get_typeCour()=='td' and classes[j].get_course().get_typeCour()=='cour') or (classes[i].get_course().get_typeCour()=='cour' and classes[j].get_course().get_typeCour()=='cour')  ):

                                        self._numbOfConflicts += 1
                                    
                               
        return 1 / ((1.0*self._numbOfConflicts + 1))
    def __str__(self):
        returnValue = ""
        for i in range(0, len(self._classes)-1):
            returnValue += str(self._classes[i]) + ", "
        returnValue += str(self._classes[len(self._classes)-1])
        return returnValue
class Population:
    def __init__(self, size):
        self._size = size
        self._data = data
        self._schedules = []
        for i in range(0, size): self._schedules.append(Schedule().initialize())
    def get_schedules(self): return self._schedules
    
    
    
    
    
    
class GeneticAlgorithm:
    def evolve(self, population): return self._mutate_population(self._crossover_population(population))
    def _crossover_population(self, pop):
        crossover_pop = Population(0)
        for i in range(NUMB_OF_ELITE_SCHEDULES):
            crossover_pop.get_schedules().append(pop.get_schedules()[i])
        i = NUMB_OF_ELITE_SCHEDULES
        while i < POPULATION_SIZE:
            schedule1 = self._select_tournament_population(pop).get_schedules()[0]
            schedule2 = self._select_tournament_population(pop).get_schedules()[0]
            crossover_pop.get_schedules().append(self._crossover_schedule(schedule1, schedule2))
            i += 1
        return crossover_pop
    def _mutate_population(self, population):
        for i in range(NUMB_OF_ELITE_SCHEDULES, POPULATION_SIZE):
            self._mutate_schedule(population.get_schedules()[i])
        return population
    def _crossover_schedule(self, schedule1, schedule2):
        crossoverSchedule = Schedule().initialize()
        for i in range(0, len(crossoverSchedule.get_classes())):
            if (rnd.random() > 0.5): crossoverSchedule.get_classes()[i] = schedule1.get_classes()[i]
            else: crossoverSchedule.get_classes()[i] = schedule2.get_classes()[i]
        return crossoverSchedule
    def _mutate_schedule(self, mutateSchedule):
        schedule = Schedule().initialize()
        for i in range(0, len(mutateSchedule.get_classes())):
            if(MUTATION_RATE > rnd.random()): mutateSchedule.get_classes()[i] = schedule.get_classes()[i]
        return mutateSchedule
    def _select_tournament_population(self, pop):
        tournament_pop = Population(0)
        i = 0
        while i < TOURNAMENT_SELECTION_SIZE:
            tournament_pop.get_schedules().append(pop.get_schedules()[rnd.randrange(0, POPULATION_SIZE)])
            i += 1
        tournament_pop.get_schedules().sort(key=lambda x: x.get_fitness(), reverse=True)
        return tournament_pop
class Course:
    def __init__(self, number, name, instructors, maxNumbOfStudents,fondamental,typeCour,specialite,section,groupe):
        self._specialite=specialite
        self._section=section
        self._groupe=groupe
        self._typeCour=typeCour
        self._number = number
        self._name = name
        self._maxNumbOfStudents = maxNumbOfStudents
        self._instructors = instructors
        self._fondamental=fondamental
    def get_section(self): return self._section
    def get_groupe(self): return self._groupe
    def get_specialite(self): return self._specialite    
    def get_typeCour(self): return self._typeCour   
    def get_fondamental(self): return self._fondamental    
    def get_number(self): return self._number
    def get_name(self): return self._name
    def get_instructors(self): return self._instructors
    def get_maxNumbOfStudents(self): return self._maxNumbOfStudents
    def __str__(self): return self._name
class Instructor:
    def __init__(self, id, name):
        self._id = id
        self._name = name
        self._work_days=[]
    def get_work_days(self): return len(self._work_days)
    
    def get_id(self): return self._id
    def get_name(self): return self._name
    def __str__(self): return self._name
class Room:
    def __init__(self, number, seatingCapacity):
        self._number = number
        self._seatingCapacity = seatingCapacity
    def get_number(self): return self._number
    def get_seatingCapacity(self): return self._seatingCapacity
class MeetingTime:
    def __init__(self, id, time):
        self._id = id
        self._time = time
    def get_id(self): return self._id
    def get_time(self): return self._time
class Department:
    def __init__(self, name, courses):
        self._name = name
        self._courses = courses
    def get_name(self): return self._name
    def get_courses(self): return self._courses
class Class:
    def __init__(self, id, dept, course):
        self._id = id
        self._dept = dept
        self._course = course
        self._instructor = None
        self._meetingTime = None
        self._room = None
        
         
         
       
    def get_id(self): return self._id
    def get_dept(self): return self._dept
    def get_course(self): return self._course
    def get_instructor(self): return self._instructor
    def get_meetingTime(self): return self._meetingTime
    def get_room(self): return self._room
    def set_instructor(self, instructor): self._instructor = instructor
    def set_meetingTime(self, meetingTime): self._meetingTime = meetingTime
    def set_room(self, room): self._room = room
    def __str__(self):
        return str(self._dept.get_name()) + "," + str(self._course.get_number()) + "," + \
               str(self._room.get_number()) + "," + str(self._instructor.get_id()) + "," + str(self._meetingTime.get_id())
class DisplayMgr:
    
    def print_available_data(self):
        print("> All Available Data")
        self.print_dept()
        self.print_course()
        self.print_room()
        self.print_instructor()
        self.print_meeting_times()
    def print_dept(self):
        depts = data.get_depts()
        availableDeptsTable = prettytable.PrettyTable(['dept', 'courses'])
        for i in range(0, len(depts)):
            courses = depts.__getitem__(i).get_courses()
            tempStr = "["
            for j in range(0, len(courses) - 1):
                tempStr += courses[j].__str__() + ", "
            tempStr += courses[len(courses) - 1].__str__() + "]"
            availableDeptsTable.add_row([depts.__getitem__(i).get_name(), tempStr])
        print(availableDeptsTable)
    def print_course(self):
        availableCoursesTable = prettytable.PrettyTable(['id', 'course #', 'max # of students', 'instructors'])
        courses = data.get_courses()
        for i in range(0, len(courses)):
            instructors = courses[i].get_instructors()
            tempStr = ""
            for j in range(0, len(instructors) - 1):
                tempStr += instructors[j].__str__() + ", "
            tempStr += instructors[len(instructors) - 1].__str__()
            availableCoursesTable.add_row(
                [courses[i].get_number(), courses[i].get_name(), str(courses[i].get_maxNumbOfStudents()), tempStr])
        print(availableCoursesTable)
    def print_instructor(self):
        availableInstructorsTable = prettytable.PrettyTable(['id', 'instructor'])
        instructors = data.get_instructors()
        for i in range(0, len(instructors)):
            availableInstructorsTable.add_row([instructors[i].get_id(), instructors[i].get_name()])
        print(availableInstructorsTable)
    def print_room(self):
        availableRoomsTable = prettytable.PrettyTable(['room #', 'max seating capacity'])
        rooms = data.get_rooms()
        for i in range(0, len(rooms)):
            availableRoomsTable.add_row([str(rooms[i].get_number()), str(rooms[i].get_seatingCapacity())])
        print(availableRoomsTable)
    def print_meeting_times(self):
        availableMeetingTimeTable = prettytable.PrettyTable(['id', 'Meeting Time'])
        meetingTimes = data.get_meetingTimes()
        for i in range(0, len(meetingTimes)):
            
            availableMeetingTimeTable.add_row([meetingTimes[i].get_id(), meetingTimes[i].get_time()])
        print(availableMeetingTimeTable)
    def print_generation(self, population):
      
        schedules = population.get_schedules()
        for i in range(0, len(schedules)):
            print([str(i+1), round(schedules[i].get_fitness(),3), schedules[i].get_numbOfConflicts(), schedules[i].__str__()])
          
    def print_schedule_as_table(self, schedule):
        classes = schedule.get_classes()
        
        for i in range(0, len(classes)):
       
            print([str(i+1),classes[i].get_dept().get_name(), classes[i].get_course().get_name() + " (" +
                           classes[i].get_course().get_number() + ", " +
                           str(classes[i].get_course().get_maxNumbOfStudents()) +")",
                           classes[i].get_room().get_number() + " (" + str(classes[i].get_room().get_seatingCapacity()) + ")",
                           classes[i].get_instructor().get_name() +" (" + str(classes[i].get_instructor().get_id()) +")",
                           classes[i].get_meetingTime().get_time() +" (" + str(classes[i].get_meetingTime().get_id()) +")"])
        
            
        
        
    def schedule_as_table_to_db(self, schedule):
        classes = schedule.get_classes()
        for i in range(0, len(classes)):
            db_req= mydb.cursor()
            db_req.execute("INSERT INTO `scheduals` ( `generation_id`, `schedual_id`, `meeting_time`, `meeting_time_id`, `departement`, `coure`, `CourMaxStudents`, `enseignant`, `instructor_id`, `salle`, `salleMax`, `specialite`, `section`, `groupe`) VALUES ('"+str(generationNumber)+"', '1', '"+classes[i].get_meetingTime().get_time()+"','"+classes[i].get_meetingTime().get_id()+"', '"+ classes[i].get_dept().get_name()+"', '"+classes[i].get_course().get_name()+"', '"+str(classes[i].get_course().get_maxNumbOfStudents())+"', '"+classes[i].get_instructor().get_name()+"', '"+str(classes[i].get_instructor().get_id())+"', '"+classes[i].get_room().get_number()+"', '"+str(classes[i].get_room().get_seatingCapacity())+"', '"+classes[i].get_course().get_specialite()+"', '"+classes[i].get_course().get_section()+"', '"+classes[i].get_course().get_groupe()+"');")
            mydb.commit()
            
            
            
        
        
           
             
            
        
       








    




data = DBMgr()


def count_gen_to_db(generationNumber):
    db_req= mydb.cursor()
    db_req.execute("INSERT INTO `generations` (`generation_id`, `created_at`, `updated_at`) VALUES ("+str(generationNumber)+", NULL, NULL);")
    mydb.commit()


def gen_to_db():
        schedules= population.get_schedules()
        for i in range(0, len(schedules)):     
            generation_id=str(generationNumber)
            schaduale_id=str(i+1)
            schadual_fitness=schedules[i].get_fitness()
            schadual_classes=schedules[i].__str__()
            
            
          
            db_req= mydb.cursor()
            db_req.execute("INSERT INTO generation_scheduals (generation_id, schaduale_id,schadual_fitness,schadual_classes) VALUES ("+generation_id+", "+schaduale_id+",'" + str(schadual_fitness) + "','" + schadual_classes + "')")
            mydb.commit()




displayMgr = DisplayMgr()
displayMgr.print_available_data()
generationNumber =1




print("\n> Generation # "+str(generationNumber))
population = Population(POPULATION_SIZE)
population.get_schedules().sort(key=lambda x: x.get_fitness(), reverse=True)


count_gen_to_db(generationNumber)
gen_to_db()
 
displayMgr.print_generation(population)
displayMgr.schedule_as_table_to_db(population.get_schedules()[0])
displayMgr.print_schedule_as_table(population.get_schedules()[0])

geneticAlgorithm = GeneticAlgorithm()
while (population.get_schedules()[0].get_fitness() != 1.0):
    generationNumber += 1
    
    
    
    print("\n> Generation # " + str(generationNumber))
    
    population = geneticAlgorithm.evolve(population)
    population.get_schedules().sort(key=lambda x: x.get_fitness(), reverse=True)
    count_gen_to_db(generationNumber)
    gen_to_db()
    
    
    
    
    
    
    displayMgr.print_generation(population)
    displayMgr.schedule_as_table_to_db(population.get_schedules()[0])
    displayMgr.print_schedule_as_table(population.get_schedules()[0])
    
print("\n\n") 