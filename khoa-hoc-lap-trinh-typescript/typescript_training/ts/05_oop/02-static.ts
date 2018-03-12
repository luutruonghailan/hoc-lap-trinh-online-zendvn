/*
enum TaskState { Created = 100, Active, InActive, Proccess, 	Finish }

interface TaskInterface {
	id: number;
	name: string;
	state?: TaskState;
}

class TaskService {
	public static username: string = "peter";

	static tasks: TaskInterface[];

	constructor(tasks: TaskInterface[]){
		TaskService.tasks = tasks;
	}

	getItems() {
		return TaskService.tasks;
	}

	static showItemsInfo() : void {
		for(let task of TaskService.tasks){
			console.log(`${TaskService.username} - ${task.name}`);
		}
	}
	// john - Coding
	// john - Study ES6
	// john - Kiss my girl
}

let taskServiceObj	= new TaskService([
	{id: 1, name: "Coding"},
	{id: 2, name: "Study ES6"},
	{id: 3, name: "Kiss my girl", state: TaskState.Finish}
]);

TaskService.showItemsInfo();

console.log(TaskService.username);

console.log(taskServiceObj.getItems());
*/