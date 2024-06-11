import React from 'react';

const Filter = ({ hideCompleted, setHideCompleted }) => {
  return (
    <div>
      <label>
        <input
          type="checkbox"
          checked={hideCompleted}
          onChange={() => setHideCompleted(!hideCompleted)}
        />
        Ukryj wykonane zadania
      </label>
    </div>
  );
};

export default Filter;
