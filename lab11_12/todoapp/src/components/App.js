import React, { useState } from 'react';
import Filter from './Filter';
import ToDoList from './ToDoList';
import NewTask from './NewTask';

const App = () => {
  const [tasks, setTasks] = useState([]);
  const [hideCompleted, setHideCompleted] = useState(false);

  const addTask = (task) => {
    setTasks([...tasks, { id: Date.now(), text: task, completed: false }]);
  };

  const toggleTaskCompletion = (id) => {
    setTasks(tasks.map(task =>
      task.id === id ? { ...task, completed: !task.completed } : task
    ));
  };

  const filteredTasks = hideCompleted ? tasks.filter(task => !task.completed) : tasks;

  return (
    <div className='container'>
      <h1>Welcome to my To Do list!</h1>
      <Filter hideCompleted={hideCompleted} setHideCompleted={setHideCompleted} />
      <div className="separator"></div>
      <ToDoList tasks={filteredTasks} toggleTaskCompletion={toggleTaskCompletion} />
      <div className="separator"></div>
      <NewTask addTask={addTask} />
    </div>
  );
};

export default App;
