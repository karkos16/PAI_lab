import React from 'react';

const Task = ({ task, toggleTaskCompletion }) => {
  return (
    <label className={task.completed ? 'completed' : ''}>
      <input
        type="checkbox"
        checked={task.completed}
        onChange={() => toggleTaskCompletion(task.id)}
      />
      {task.text}
    </label>
  );
};

export default Task;
