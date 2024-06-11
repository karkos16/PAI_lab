import React from 'react';
import Task from './Task';

const ToDoList = ({ tasks, toggleTaskCompletion }) => {
  return (
    <div>
      {tasks.length === 0 ? (
        <p>Brak zadań do wyświetlenia</p>
      ) : (
        tasks.map(task => (
          <Task key={task.id} task={task} toggleTaskCompletion={toggleTaskCompletion} />
        ))
      )}
    </div>
  );
};

export default ToDoList;
