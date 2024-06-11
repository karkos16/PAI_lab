import React, { useState } from 'react';

const NewTask = ({ addTask }) => {
  const [taskText, setTaskText] = useState('');

  const handleAddTask = () => {
    if (taskText.trim()) {
      addTask(taskText);
      setTaskText('');
    }
  };

  const handleInputChange = (e) => {
    setTaskText(e.target.value);
  };

  const handleKeyPress = (e) => {
    if (e.key === 'Enter') {
      handleAddTask();
    }
  };

  return (
    <div className="new-task">
      <input
        type="text"
        value={taskText}
        onChange={handleInputChange}
        onKeyPress={handleKeyPress}
        placeholder="Add new task"
      />
      <button onClick={handleAddTask}>Add</button>
    </div>
  );
};

export default NewTask;
